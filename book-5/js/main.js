$(document).ready(function(){
	var win = $('.window-container');

	
	$('.icon.play').on('click', function(){
		video.pause();
		win.fadeIn(200);
	});
	$('.close').on('click', function(){

		$('.window-container').fadeOut(200, function(){
			video.play();
			
		});
	});
});


var play;
function onYouTubePlayerAPIReady() {
    play = new YT.Player('player', {videoId: 'p4xqIucDAcQ',});
    document.getElementById('stop').onclick = function() {play.pauseVideo();};
}