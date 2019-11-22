<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="monitor-signature" content="monitor:player:html5">
 <meta name="apple-mobile-web-app-status-bar-style" content="black" />
 
<meta name="Keywords" content="" />
<meta name="Description" content="2do actividades parte uno" />
<meta name="Generator" content="Flip PDF Corporate Edition 2.4.8  at http://www.flipbuilder.com" />
<link rel="image_src" href="files/shot.png">
 <link rel="shortcut icon" href="files/thumb/1.jpg" />
<link rel="apple-touch-icon" href="files/thumb/1.jpg" />
<meta name="og:image" content="files/shot.png">
<meta property="og:image" content="files/shot.png">
<title>2do actividades parte uno</title>

<link rel="stylesheet" href="mobile/style/style.css" />
<link rel="stylesheet" href="mobile/style/player.css" />
<link rel="stylesheet" href="mobile/style/phoneTemplate.css" />
<script src="../../../js/jquery-3.4.1.min.js"></script>
<script src="mobile/javascript/jquery-1.9.1.min.js"></script>
  <link href="../../../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>

<script src="mobile/javascript/config.js"></script>



</head>	
<body>
	<div id="notaciones">
	<?php include('../paint/paint.php'); ?>
	</div>

	   <a style="margin-top:10vh; z-index: 55559999999 !important; position: absolute;" class="btn amber notas">Notas</a>
	<script src="mobile/javascript/search_config.js"></script><script src="mobile/javascript/bookmark_config.js"></script>
<script src="mobile/javascript/LoadingJS.js"></script>

<script src="mobile/javascript/main.js"></script>

<link rel="stylesheet" href="mobile/style/template.css" />
<script type="text/javascript">

		
	var sendvisitinfo = function(type,page){};

	$('#notaciones').hide();
$(".notas").click(function(){ 
 
         var press=$(this).attr("class");
         console.log(press);
         if (press=="btn amber notas on"){
           $('#notaciones').hide();
           $(this).removeClass("on");
         }
         else{
           $('#notaciones').show();
           $(this).addClass("on");
         }
     });
</script>
<noscript><div><hr/><ul><li><a href="files/basic-html/index.html">Pages</a></li></ul><hr width="80%"/></div></noscript>
</body>
</html>
