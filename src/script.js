$("#send").click(function(){
	var name = $("#name").val();
	var email = $("#email").val();
	var message = $("#message").val();
	if (isBlank(name) && isBlank(email) && isBlank(message)) {
		// Nothing to send!
		// Focus on Name
	} else if (isBlank(message)) {
		// Please fill this out
		// Focus on Message
	} else if (isBlank(email)) {
		// You didn't put an email address
		// Let me fix it | Send anyways
	} else if(!isValidEmailAddress(email)) {
	    // Your email doesn't look right
	    // Let me fix it | Send anyways
	} else {
		sendMessage(name, email, message);
	}
});
function isBlank (words) {
	return words.replace(/\s+/g, '') == '';
}
function isValidEmailAddress (emailAddress) {
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
};
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