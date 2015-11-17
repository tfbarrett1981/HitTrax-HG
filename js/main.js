$( document ).ready(function() {
	$(".buttonBorder").click(function(e){
		$(this).hide();
		var items = Array("foundAccount", "noAccount");
		
		var item = items[Math.floor(Math.random()*items.length)];
		$("#" + item).removeClass("hidden");
	});
    
});