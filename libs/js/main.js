function video_height_init() {
	var width = $(window).width()
	var height = width*3/4
	$(".video_live").css("height",height)
}







$(document).ready(function(){
	$(window).load(function() {
		video_height_init()
	})
})