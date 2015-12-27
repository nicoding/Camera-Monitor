<?php
require_once ('./libs/php/Mobile_Detect.php');
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

if ($deviceType!='phone') {
	echo "Please Visit This Site In Your Phone";
	exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<title>Camera Monitor</title>
	<link rel="stylesheet" type="text/css" href="./libs/css/style.css">
	<script type="text/javascript" src="./libs/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="./libs/js/main.js"></script>
</head>
<body>
	<div class="title">Camera Monitor Demo</div>
	<div class="video_live">
		<script type="text/javascript" src="./libs/player/sewise.player.min.js?server=live&type=rtmp&streamurl=rtmp://219.232.161.204/livestream/mtzysunq&autostart=false&buffer=5&lang=zh_CN&logo=http://onvod.sewise.com/libs/swfplayer/skin/images/logo1.png&poster=http://jackzhang1204.github.io/materials/poster1.png&title=&skin=liveWhite"></script>
	</div>
	<div class="clear-both"></div>
	<label class="button">
		<input type="checkbox">
		<span></span>
		<span></span>
	</label>
</body>
</html>