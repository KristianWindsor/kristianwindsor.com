// nav
$("#hamburger").click(function(){
	$("#nav-a").slideToggle(100);
});
$(window).on('resize', function(){
	if ($(window).width() > 415) {
		$("#nav-a").show();
	}
});

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
    setTimeout(function(){ flag = false; }, 310);
    scrollTo("#about-section",650)
  }
  return false
});
// portfolio section
$("#nav-portfolio").bind('touch mouseup', function(){
  if (!flag) {
    flag = true;
    setTimeout(function(){ flag = false; }, 310);
    scrollTo("#portfolio-section",850)
  }
  return false
});
// experience section
$("#nav-experience").bind('touch mouseup', function(){
  if (!flag) {
    flag = true;
    setTimeout(function(){ flag = false; }, 310);
    scrollTo("#experience-section",1000)
  }
  return false
});
// contact section
$("#nav-contact").bind('touch mouseup', function(){
  if (!flag) {
    flag = true;
    setTimeout(function(){ flag = false; }, 310);
    scrollTo("#contact-section",1300)
  }
  return false
});
// portfolio section
$("#nav-portfolio-2").bind('touch mouseup', function(){
  if (!flag) {
    flag = true;
    setTimeout(function(){ flag = false; }, 310);
    scrollTo("#portfolio-section",550)
  }
  return false
});
// contact section
$("#nav-contact-2").bind('touch mouseup', function(){
  if (!flag) {
    flag = true;
    setTimeout(function(){ flag = false; }, 310);
    scrollTo("#contact-section",950)
  }
  return false
});


// force hover event on mobile for portfolio
var flag2 = false;
 $("body > *").not(".image-container > *").on('touchstart', function () {
	if (!flag2) {
	    $('.hoverable').removeClass("hovering");
	}
 });
$('.hoverable').on('touchstart', function () {
	flag2 = true;
	$(this).addClass("hovering");
	setTimeout(function(){ flag2 = false; }, 310);
 });

// force hover event on mobile for a tags
$('a').bind('touchmove', function(){
    $(this).addClass('a-hovering');
}).bind('touchend', function(){
    $(this).removeClass('a-hovering');
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

// google analytics
$("#nav a").click(function() {
	ga('send', 'event', 'Link', 'Scroll', $(this).context.text);
});
$("#about-section a").click(function() {
	var type = "External";
	var label = "Portfolio";
	if ($(this).context.href == "") {
		type = "Scroll";
		if ($(this).context.id == "nav-contact-2") {
			label = "Contact";
		}
	}
	ga('send', 'event', 'Link', type, cleanUpGA($(this)) + ' - About');
});
$("#portfolio-section a").click(function() {
	ga('send', 'event', 'Link', 'External', cleanUpGA($(this)));
});
$("#experience-section a").click(function() {
	ga('send', 'event', 'Link', 'External', cleanUpGA($(this)));
});
$("#contact-section a").click(function() {
	var type = "Action";
	if(cleanUpGA($(this)) == "Google Maps") {
		type = "External";
	}
	ga('send', 'event', 'Link', type, cleanUpGA($(this)), +' - Contact');
});
$("#bye a").click(function() {
	var type = "External";
	if(cleanUpGA($(this)) == "Mail" || cleanUpGA($(this)) == "Phone") {
		type = "Action";
	}
	ga('send', 'event', 'Link', type, cleanUpGA($(this)));
});
function cleanUpGA(input) {
	var href = input.context.href;
	var filtered = href.replace("https://www.flickr.com/photos/116918023@N02/","Flickr").replace("http://momclothing.site/","MOM Clothing").replace("http://www.apasswordgenerator.website/","A Password Generator").replace("https://github.com/Windso/apasswordgenerator.website","Github: A Password Generator").replace("http://difficultbib.com/","Difficult Bib").replace("https://github.com/Windso/difficultbib.com","Github: Difficult Bib").replace("https://wp.pinger.com/","Pinger").replace("mailto:kristianwindso@gmail.com","Mail").replace("tel:14086834007","Phone").replace("https://www.google.com/maps/place/Cupertino,+CA/","Google Maps").replace("https://github.com/Windso","Github").replace("https://www.linkedin.com/in/kristian-windsor-80947b119/","LinkedIn").replace("https://www.youtube.com/channel/UCZ4fDjpML5yp6QQcdMkyoXg","YouTube").replace("https://www.instagram.com/wind.so/?hl=en","Instagram").replace("http://kristianwindsor.tumblr.com/","Tumblr");
	return filtered;
}

// google analytics page speed
_gaq.push(['_setSiteSpeedSampleRate', 100]);
_gaq.push(['_trackPageview']);