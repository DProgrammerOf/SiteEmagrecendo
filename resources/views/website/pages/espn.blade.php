<!DOCTYPE html>
<html>
<head>
	<title>MyTV - Sua TV Online (ESPN Brasil)</title>
	<link href="https://unpkg.com/video.js/dist/video-js.min.css" rel="stylesheet">
	<script src="https://unpkg.com/video.js/dist/video.min.js"></script>

	<style type="text/css">
		.video-js {
			margin: auto;
		}
	</style>
</head>
<body>
	
<div style="width: 100%;height: 100%;">
    <div style="margin: auto;text-align: center;">
    	<h2>ESPN Brasil - (Canal Teste)</h2>
    </div>
	<video-js id="canal-espn" width=960 height=540 class="vjs-default-skin video-js" controls>
	  <source
	     src="https://ul.cdn444.xyz:8443/hls/gx2yi93og5j5tr.m3u8?s=is1fuYG-oYVq9rJP1ra_zQ&e=1540886712"
	     type="application/vnd.apple.mpegurl">
	</video-js>
</div>


<script>
	window.HELP_IMPROVE_VIDEOJS = false;
	var player = videojs('canal-espn');

	player.play();
</script>

</body>
</html>