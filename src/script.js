// nav
$("#hamburger").click(function(){
	$("#nav-a").slideToggle(100);
});
$(window).on('resize', function(){
	if ($(window).width() > 415) {
		$("#nav-a").show();
	}
});

// scroll to about
$(".about-shortcut").click(function(){
	$('html, body').animate({
		scrollTop: $("#about-section").offset().top
	}, 650);
});
// scroll to portfolio (slow)
$(".portfolio-shortcut").click(function(){
	$('html, body').animate({
		scrollTop: $("#portfolio-section").offset().top
	}, 850);
});
// scroll to portfolio (fast)
$(".portfolio-shortcut-fast").click(function(){
	$('html, body').animate({
		scrollTop: $("#portfolio-section").offset().top
	}, 550);
});
// scroll to experience
$(".experience-shortcut").click(function(){
	$('html, body').animate({
		scrollTop: $("#experience-section").offset().top
	}, 1000);
});
// scroll to contact (slow)
$(".contact-shortcut").click(function(){
	$('html, body').animate({
		scrollTop: $("#contact-section").offset().top
	}, 1300,
	function() {
		$("#name").focus();
	});
});
// scroll to contact (fast)
$(".contact-shortcut-fast").click(function(){
	$('html, body').animate({
		scrollTop: $("#contact-section").offset().top
	}, 1100,
	function() {
		$("#name").focus();
	});
});

// send button
$("#send").click(function(){
	var name = $("#name").val();
	var email = $("#email").val();
	var message = $("#message").val();
	if (isBlank(name) && isBlank(email) && isBlank(message)) {
		$(".contact-label").css("color", "#f00000");
		$(".textbox").css("border-color", "#f00000");
		$("#name").focus();
		resetColorsTimer = 7;
	} else if (isBlank(message)) {
		$("#message-label").css("color", "#f00000");
		$("#message").css("border-color", "#f00000");
		$("#message").focus();
		resetColorsTimer = 7;
	} else if (isBlank(email)) {
		$("#send").hide();
		$("#no-email").fadeIn(200).css("display","block");;
		$(".yesno").fadeIn(200);
	} else if(!isValidEmailAddress(email)) {
		$("#send").hide();
		$("#bad-email").fadeIn(200).css("display","block");
		$(".yesno").fadeIn(200);
	} else {
		sendMessage(name, email, message);
	}
});

// [send] yes button
$("#send-yes").click(function(){
	sendMessage($("#name").val(), $("#email").val(), $("#message").val());
	hideYesNo();
});

// [send] no button
$("#send-no").click(function(){
	$("#email").focus();
	hideYesNo();
});

// user types in contact form
$(".textbox").keypress(function() {
	resetContactColors();
});

// test to see if string is blank
function isBlank (words) {
	return words.replace(/\s+/g, '') == '';
}

// test to see if email address is valid
function isValidEmailAddress (emailAddress) {
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
};

// remove red color from contact form
function resetContactColors () {
	$(".contact-label").css("color", "#5a5959");
	$(".textbox").css("border-color", "#bbb");
}

//  make sure the contact form behaves correctly if the send button is spammed
var resetColorsTimer = -1;
function handleRedColors(){
	if (resetColorsTimer == 0) {
		resetContactColors();
	} else {
		resetColorsTimer--;
	}
	setTimeout( function() {
		handleRedColors();
	}, 1000);
}
handleRedColors();

// hide yes/no buttons and show send button
function hideYesNo() {
	$(".yesno").hide();
	$("#no-email").hide();
	$("#bad-email").hide();
	$("#send").fadeIn(200);
}

// send message
function sendMessage (n,e,m) {
	$.ajax({
	    url: 'send-message.php',
	    type: 'post',
	    data: { "name": n, "email" : e, "message" : m },
	    success: function() {
	    	$("#submitted").show();
	    	$("#name").val("");
	    	$("#email").val("");
	    	$("#message").val("");
	    }
	});
}

// resize photo
function resizePhoto() {
      if ($(window).width() > 1310) {
      	$("#photo-of-me").width($("#about").innerHeight());
      } else {
      	$("#photo-of-me").width(210);
      }
}
$(window).load( resizePhoto() );
$(window).on('resize', function(){
	resizePhoto();
});