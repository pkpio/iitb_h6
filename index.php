<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hostel 6</title>
<link rel="stylesheet" type="text/css" href="MyFontsWebfontsKit.css">
<link rel="stylesheet" type="text/css" href="MyFontsWebfontsKit1.css">
<link href='h6Favicon.ico' rel='shortcut icon' type='jpg'/>
<link rel="stylesheet" type="text/css" href="styles/style.css" />

<link rel="stylesheet" href="styles/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="styles/themes/pascal/pascal.css" type="text/css" media="screen" />
<link rel="stylesheet" href="styles/themes/orman/orman.css" type="text/css" media="screen" />
<link rel="stylesheet" href="styles/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="styles/sliderStyle.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.color.js"></script>
<script type="text/javascript" src="js/jquery.text-effects.js"></script>
<script type="text/javascript" src="js/jquery.watermark-3.1.3.js"></script>
<script type="text/javascript" src="js/page-change-animation.js"></script>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29871891-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>

<div id="header">
<img src="images/headertitle.png" id="headertitle" />
<a href="http://www.facebook.com/pages/VI-Kings-Hostel-6-IIT-Bombay/153075061382500" target="_new"><img src="images/facebook.png" id="fbIcon" /></a>
</div>

<div id="body">

<!-- Left Navigation -->
<div id="menu">
<ul>
<li><a id="home" href="#home" name="Vikings">Home</a></li>
<li><a id="activities" href="#activities" name="Activities">Activities</a></li>
<li><a id="councilpage" href="#councilpage" name="Council Page">Council Page</a></li>
<li><a id="alumni" href="#alumni" name="Alumni">Alumni</a></li>
<li><a id="gallery" href="#gallery" name="Gallery">Gallery</a></li>
</ul>
</div>

<div id="rightDiv">
</div>

<!-- Body content--->
<img id="loadingImage" src="loading.gif" style=" position:fixed; left:500px; top:285px; visibility:hidden; z-index:999;" />
<div id="content">
    <script type="text/javascript">
    $(window).ready(function() {
	$url = document.location.href.split("#!/");
	$url = $url[1];
	if(document.location.href.indexOf("#!/")<0){
	$url="slider";
	$('#content').load('content/'+$url+'.php');
    $('#slider').nivoSlider();
	}else{
	$('#content').load('content/'+$url+'.php');}
    });
    </script>
</div>

<!--Updates Div-->

<div id="updates">
<?php include_once 'updates/index.php' ; ?>
</div>


<div id="MessMenuHeading">Today's Mess</div>
<div id="MessMenu">
<?php include_once 'MessMenu/mess.php'; ?>
</div>

<div id="share">
<?php include_once 'share.php' ; ?>
</div>


<div id="footer">
<?php include_once 'footer.php'; ?>
</div>

</div>

</body>
</html>