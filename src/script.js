$("#send").click(function(){
	$.ajax({
	    url: 'send-message.php',
	    type: 'post',
	    data: { "name": $("#name").val(), "email" : $("#email").val(), "message" : $("#message").val() },
	    success: function() {
	    	$("#submitted").show();
	    	$("#name").val("");
	    	$("#email").val("");
	    	$("#message").val("");
	    }
	});
});
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