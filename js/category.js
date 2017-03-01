$(document).ready(function(){
	$(".zyh_bodyleftzi li").each(function(index){
		$(this).hover(function(){
			$(".zyh_bodyleftzi li>a").eq($(this).index()).addClass("ahover")
		},function(){
			$(".zyh_bodyleftzi li>a").eq($(this).index()).removeClass("ahover")
		})
	})
})
