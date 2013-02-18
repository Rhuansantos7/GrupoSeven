<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('include/metas.php'); ?>
<?php include('include/css.php'); ?>
<title>Seven CG</title>
<script type="text/javascript">
		<!--
		function GetUnity() {
			if (typeof unityObject != "undefined") {
				return unityObject.getObjectById("unityPlayer");
			}
			return null;
		}
		if (typeof unityObject != "undefined") {
			unityObject.embedUnity("unityPlayer", "WebPlayer.unity3d", 1080, 600);
			
		}
		-->
		</script>
<style>
#content_escracha{
	 width: 1920px;
	 height: 1080px;
	background:url(escracha/escracha-fundo.jpg);
	 margin: auto;
	
}
#web_player{
	width: 800px;
	height: 600px;
	background:#9c3131;
	position: absolute;
	left: 50%;
	margin: 300px 0px 0px -400px;
}
#rodape_escracha{
	width: 1920px;
	height: 200px;
	background: #0c0505;
}
}
		a:link, a:visited {
			color: #000;
		}
		a:active, a:hover {
			color: #666;
		}
		p.header {
			font-size: small;
		}
		p.header span {
			font-weight: bold;
		}
		p.footer {
			font-size: x-small;
		}
		div.content {
			margin: auto;
			width: 1080px;
		}
		div.missing {
			margin: auto;
			position: relative;
			top: 50%;
			width: 193px;
		}
		div.missing a {
			height: 63px;
			position: relative;
			top: -31px;
		}
		div.missing img {
			border-width: 0px;
		}
		div#unityPlayer {
			cursor: default;
			height: 600px;
			width: 1080px;
		}
</style>
</head>
<body>



<div id="content_escracha">
	
	<div id="web_player">
		

		<div class="content">
			<div id="unityPlayer">
				<div class="missing">
					<a href="http://unity3d.com/webplayer/" title="Unity Web Player. Install now!">
						<img alt="Unity Web Player. Install now!" src="http://webplayer.unity3d.com/installation/getunity.png" width="193" height="63" />
					</a>
				</div>
			</div>
		</div>
		<p class="footer">Seven Media - Produtora</a> &raquo;</p>
	</div>
	
	
	
</div>

<div id="rodape_escracha">
	
	
</div>
</body>
</html>
