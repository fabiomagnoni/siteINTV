$(document).ready(function(){

	if($.isFunction($.fn.select2)){
		$(".select2").select2();
	}

	$(".has-submenu").click(function(event){
		event.preventDefault();

		var submenu=$("#"+$(this).data("submenu"));

		if(submenu.hasClass("submenu-open")){
			closeSubmenu();
		}else{
			submenu.addClass("submenu-open");
			$("body").addClass("submenu-open")
		}

		return false;
	});
	function closeSubmenu(){
		$(".submenu-open").removeClass("submenu-open");
	}

	$(document).click(function(event){
		if(!$(".submenu").has($(event.target)).length && !$(event.target).hasClass("submenu")){
			closeSubmenu();
		}
	});

})