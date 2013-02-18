<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>CreateJS export from animação-notas.fla</title>

<script src="http://code.createjs.com/easeljs-0.4.2.min.js"></script>
<script src="http://code.createjs.com/tweenjs-0.2.0.min.js"></script>
<script src="http://code.createjs.com/movieclip-0.4.1.min.js"></script>
<script src="http://code.createjs.com/preloadjs-0.1.0.min.js"></script>
<script src="animação-notas.js"></script>

<script>
var canvas, stage, exportRoot, images;

function init() {
	canvas = document.getElementById("canvas");
	images = {};

	var manifest = [
		{src:"images/slogan_1.png", id:"slogan_1"},
		{src:"images/home.png", id:"home"},
		{src:"images/cópia4.jpg", id:"cópia4"},
		{src:"images/cópia2.jpg", id:"cópia2"},
		{src:"images/topobackground.jpg", id:"topobackground"}
	];

	var loader = new PreloadJS(false);
	loader.onFileLoad = handleFileLoad;
	loader.onComplete = handleComplete;
	loader.loadManifest(manifest);
}

function handleFileLoad(o) {
	if (o.type == "image") { images[o.id] = o.result; }
}

function handleComplete() {
	exportRoot = new lib.animaçãonotas();

	stage = new Stage(canvas);
	stage.addChild(exportRoot);
	stage.update();

	Ticker.setFPS(24);
	Ticker.addListener(stage);
}
</script>
</head>

<body onload="init();" style="background-color:transparent;">
	<canvas id="canvas" width="1920" height="239" style="background-color:transparent;"></canvas>
</body>
</html>