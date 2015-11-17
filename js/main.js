$( document ).ready(function() {
	$(".forgot-password-template .buttonBorder").click(function(e){
		$(this).hide();
		var items = Array("foundAccount", "noAccount");
		
		var item = items[Math.floor(Math.random()*items.length)];
		$("#" + item).removeClass("hidden");
	});
	
	$(".reset-password-template .buttonBorder").click(function(e){
		
		var items = Array("resetSuccess", "resetFail");
		
		var item = items[Math.floor(Math.random()*items.length)];
		if(item == "resetSuccess")
		{
			$(".passwordText, .passwordInputBox").addClass("hidden");
			$(".submitButton").val("LOGIN NOW")
		}
		
		if(item == "resetFail")
		{
			$(".passwordText").addClass("hidden");
		}
		$("#" + item).removeClass("hidden");
	});
    
});