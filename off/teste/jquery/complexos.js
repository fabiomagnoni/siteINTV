$(document).ready(function(){
	var container=$(".mapa");
    var mapa=Snap(435,465);
	mapa.appendTo(container.get(0));
	Snap.load(container.data("svg"),function(gfx){
		mapa.append(gfx);
		$(".mapa>svg>svg").attr("width",435);
		$(".mapa>svg>svg").attr("height",465);
		var estados=$(".mapa").data("estados");
		for(var i in estados){
			var estado=$(".mapa #"+estados[i]);
			estado.attr("class","estado estado-active");
			estado.click(function(){
				id=$(this).attr("id");
				openModal($(this).data("estado"),$("#texto-"+id).html());
			});
			var curLabel=null;
			estado.hover(function(){
				var pos=$(this).position();
				var bounds=$(this)[0].getBoundingClientRect();
				var label=$("<div/>").addClass("estado-label").appendTo(container);
				curLabel=label;
				label.css({
					position:"absolute",
					left:pos.left+(bounds.width),
					top:pos.top+(bounds.height/2)
				})
				label.text($(this).data("estado"));
			},function(){
				if(curLabel!=null){
					curLabel.remove();
					curLabel=null;
				}
			})
		}
	})
	function openModal(title,text){
		$(".overlay").removeClass('overlay-hidden');
		$(".modal-title").html(title);
		$(".modal-text").html(text);
		$(".modal").css({
			top:($(window).height()-$(".modal").height())/2
		})
		//transition
		$(".overlay").css({
			opacity:0
		})
		$(".overlay").transition({opacity:1,duration:200});
	}
	function closeModal(){
		$(".overlay").transition({opacity:0,duration:200},function(){
			$(".overlay").addClass("overlay-hidden");
		});
	}
	$(".overlay").click(function(){
		closeModal();
	})
	$(".modal-close").click(function(event){
		event.preventDefault();
		closeModal();
		return false;
	})
	$(".modal").click(function(event){
		event.stopPropagation();
		return false;
	})
})