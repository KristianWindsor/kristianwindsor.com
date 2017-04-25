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