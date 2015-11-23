jQuery( document ).ready(function($) {
	$(".page-template-page-forgot .buttonBorder").click(function(e){
		$(this).hide();
		var items = Array("foundAccount", "noAccount");
		
		var item = items[Math.floor(Math.random()*items.length)];
		$("#" + item).removeClass("hidden");
	});
	
	$(".page-template-page-reset .buttonBorder").click(function(e){
		
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