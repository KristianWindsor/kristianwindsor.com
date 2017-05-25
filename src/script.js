
$("#send").click(function(){
	var name = $("#name").val();
	var email = $("#email").val();
	var message = $("#message").val();
	if (isBlank(name) && isBlank(email) && isBlank(message)) {
		$(".contact-label").css("color", "#f00000");
		$(".textbox").css("border-color", "#f00000");
		$("#name").focus();
		resetContactColors(7000);
	} else if (isBlank(message)) {
		$("#message-label").css("color", "#f00000");
		$("#message").css("border-color", "#f00000");
		$("#message").focus();
		resetContactColors(7000);
	} else if (isBlank(email)) {
		$("#send").hide();
		$("#no-email").fadeIn(200);
		$(".yesno").fadeIn(200);
	} else if(!isValidEmailAddress(email)) {
		$("#send").hide();
		$("#bad-email").fadeIn(200);
		$(".yesno").fadeIn(200);
	} else {
		sendMessage(name, email, message);
	}
});
$("#send-yes").click(function(){
	sendMessage($("#name").val(), $("#email").val(), $("#message").val());
	hideYesNo();
});
$("#send-no").click(function(){
	$("#email").focus();
	hideYesNo();
});
$(".textbox").keypress(function() {
	resetContactColors(0);
});
function isBlank (words) {
	return words.replace(/\s+/g, '') == '';
}
function isValidEmailAddress (emailAddress) {
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
};
function resetContactColors (wait) {
	setTimeout( function() {
		$(".contact-label").css("color", "#5a5959");
		$(".textbox").css("border-color", "#bbb");
	  }, wait);
}
function hideYesNo() {
	$(".yesno").hide();
	$("#no-email").hide();
	$("#bad-email").hide();
	$("#send").fadeIn(200);
}
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
$("#portfolio-shortcut").click(function(){
	$('html, body').animate({
		scrollTop: $("#portfolio-section").offset().top
	}, 800);
});
$("#contact-shortcut").click(function(){
	$('html, body').animate({
		scrollTop: $("#contact-section").offset().top
	}, 1000,
	function() {
		$("#name").focus();
	});
});