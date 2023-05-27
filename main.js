$(document).ready(function(){

	//email
	$("form").submit(function() {
		var th = $(this);
		$.ajax({

			type: "POST",
			url: "mail.php",
			data: th.serialize()
		}).done(function(){
			alert("Сообщение отправлено!");
			setTimeout(function() {
				//done functions
				th.trigger("reset");
			},1000);
		});	
		return false;
	});
});