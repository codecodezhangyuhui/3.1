$(document).ready(function(){
	//banner导航 star
	$(".zyh_bannernavright li").each(function(index){
		$(this).hover(function(){
			$(".zyh_bannernavright li a").eq($(this).index()).css({display:"block"});
		},function(){
			$(".zyh_bannernavright li a").eq($(this).index()).css({display:"none"});
		})
	})
	//banner导航 end
	//banner轮播  star
	var now=0;
	var next=0;
	$(".zyh_bannercircle li").each(function(index){
		$(this).hover(function(){
			next=$(this).index()
			if(now==next){
				return;
			}
			$(".zyh_bannerimgs li").eq(now).animate({opacity:0},500).end().eq(next).animate({opacity:1},500);
			now=next;
		})
	})
	//banner轮播  end
	//index_body star
	$(".zyh_body ul li").each(function(index){
		$(this).hover(function(){
			$(".zyh_body ul li>img").eq($(this).index()).css({display:"none"})
			$(".zyh_body ul li a").eq($(this).index()).css({display:"block"})
		},function(){
			$(".zyh_body ul li>img").eq($(this).index()).css({display:"block"})
			$(".zyh_body ul li a").eq($(this).index()).css({display:"none"})
		})
	})
	//index_body end
	

})