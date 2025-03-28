// scroll to sections
function scrollTo(section, speed) {
	var sectionHeight = $(section).innerHeight();
	var windowHeight = $(window).height();
	var extra = 0;
	if (windowHeight > sectionHeight) {
		extra = (windowHeight - sectionHeight) / 2;
	}
	$('html, body').animate({
		scrollTop: $(section).offset().top - extra
	}, speed);
}
var flag = false;
// about section
$("#nav-about").bind('touch mouseup', function(){
  if (!flag) {
    flag = true;
    setTimeout(function(){ flag = false; }, 200);
    scrollTo(".about.section",1000)
  }
  return false
});
// websites section
$("#nav-websites").bind('touch mouseup', function(){
  if (!flag) {
    flag = true;
    setTimeout(function(){ flag = false; }, 200);
    scrollTo(".websites.section",650)
  }
  return false
});
// experience section
$("#nav-experience").bind('touch mouseup', function(){
  if (!flag) {
    flag = true;
    setTimeout(function(){ flag = false; }, 200);
    scrollTo(".experience.section",900)
  }
  return false
});
// contact section
$("#nav-contact").bind('touch mouseup', function(){
  if (!flag) {
    flag = true;
    setTimeout(function(){ flag = false; }, 200);
    scrollTo(".contact.section",1100)
  }
  return false
});

// force hover event on mobile for websites
var flag2 = false;
 $("body > *").not(".image-container > *").on('touchstart', function () {
	if (!flag2) {
	    $('.hoverable').removeClass("hovering");
	}
 });
$('.hoverable').on('touchstart', function () {
	if (!$(".hoverable").hasClass("hovering")) {
		flag2 = true;
		$(this).addClass("hovering");
		setTimeout(function(){ flag2 = false; }, 200);
	}
 });

// force hover event on mobile for a tags
$('a').bind('touchmove', function(){
    $(this).addClass('a-hovering');
}).bind('touchend', function(){
    $(this).removeClass('a-hovering');
});

// prevent hover and tap events to happen at the same time
$('.website-link').on("click", function (e) {
	if (flag2) {
        e.preventDefault();
    }
});

// send button
$("#send").click(function(){
	var name = $("#name").val();
	var email = $("#email").val();
	var message = $("#message").val();
	var event;
	if (isBlank(name) && isBlank(email) && isBlank(message)) {
		$(".textbox").addClass("red-border");
		$("#name").focus();
		resetColorsTimer = 7;
		event = "Empty Name, Email, Message";
	} else if (isBlank(message)) {
		$("#message").addClass("red-border");
		$("#message").focus();
		resetColorsTimer = 7;
		event = "Empty Message";
	} else if (isBlank(name) && isBlank(email)) {
		$("#send").hide();
		$("#no-name-no-email").fadeIn(200).css("display","block");;
		$(".yesno").fadeIn(200);
		event = "Empty Name, Email";
	} else if (isBlank(name)) {
		$("#send").hide();
		$("#no-name").fadeIn(200).css("display","block");;
		$(".yesno").fadeIn(200);
		event = "Empty Name";
	} else if (isBlank(email)) {
		$("#send").hide();
		$("#no-email").fadeIn(200).css("display","block");;
		$(".yesno").fadeIn(200);
		event = "Empty Email";
	} else if(!isValidEmailAddress(email)) {
		$("#send").hide();
		$("#bad-email").fadeIn(200).css("display","block");
		$(".yesno").fadeIn(200);
		event = "Bad Email";
	} else {
		sendMessage(name, email, message);
		event = "Message Sent";
	}
	ga('send', 'event', 'Form Interaction', event);
});

// [send] yes button
$("#send-yes").click(function(){
	sendMessage($("#name").val(), $("#email").val(), $("#message").val());
	hideYesNo();
});

// [send] no button
$("#send-no").click(function(){
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
	$(".textbox").removeClass("red-border");
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
	$("#no-name-no-email").hide();
	$("#no-name").hide();
	$("#no-email").hide();
	$("#bad-email").hide();
	$("#send").fadeIn(200);
}

// send message
function sendMessage (n,e,m) {
	$.ajax({
	    url: '/script/send-message.php',
	    type: 'post',
	    data: { "name": n, "email" : e, "message" : m },
	    success: function() {
	    	if ($("#name").val().length > 1) {
	    		var firstName = $("#name").val().split(' ')[0];
		    	$("#firstName").html(" " + firstName);
		    }
	    	$("#submitted").show();
	    	$("#name").val("");
	    	$("#email").val("");
	    	$("#message").val("");
	    	scrollTo("#submitted",450);
			ga('send', 'event', 'Form Interaction', 'Message Success');
	    }
	});
}

// Dark Mode
if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
	$('img[src="/contact/phone.png"]').attr('src', '/contact/phone-dark.jpg');
	$('img[src="slack-redditbot.png"]').attr('src', 'slack-redditbot-dark.png');
}
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
	const newColorScheme = event.matches ? "dark" : "light";
	if (newColorScheme == 'dark') {
		$('img[src="/contact/phone.png"]').attr('src', '/contact/phone-dark.jpg');
	} else {
		$('img[src="/contact/phone-dark.jpg"]').attr('src', '/contact/phone.png');
	}
});



/* Blog */
$(window).on('load', function () {
    $('img.isgif').each(function(i, obj) {
        var oldSrc = $(obj).attr('src');
        var newSrc = oldSrc.split('.')[0] + '.gif';
        $('body').append('<img src="'+newSrc+'" class="gifisgif" />');
    });
    $('img.gifisgif').on('load', function() {
        var newSrc = $(this).attr('src');
        $(this).remove();
        var oldSrc = newSrc.split('.')[0];
        var imgEl = $('body').find('[src^='+oldSrc+']');
        $(imgEl).removeClass('isgif');
        $(imgEl).attr('src', newSrc);
    });
});