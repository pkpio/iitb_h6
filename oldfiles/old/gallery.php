<?php
$current = 2;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<link href="css/default.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/default.js"></script>
<script type="text/javascript" src="js/jquery-1.2.3.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/jquery.lavalamp.min.js"></script>
<script type="text/javascript" src="js/jquery.slidingGallery-1.2.min.js"></script>
<title>VIKINGS - Hostel 6</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<script language="javascript" type="text/javascript">
$(function() {
	var zoomFunc = function(dimension) {
		return dimension * 1.5;
	}
	var shrinkFunc = function(dimension) {
		return dimension * 0.5;
	}
	$('div.gallery img').slidingGallery({'slideSpeed':'slow','Lzoom':zoomFunc, 'Pzoom':zoomFunc,'Lshrink':shrinkFunc,'Pshrink':shrinkFunc,container: $('div.gallery')});
});
</script>

<style type="text/css">
.gallery
{
	height:500px;
	position:relative;
	top:50px;
	padding-bottom:30px;
	margin:auto;
	overflow:visible;
}
div.gallery img 
{
	border: solid 1px white;
}
</style>

<script type="text/javascript">
        $(function() {
            $("#1, #2, #3").lavaLamp({
                fx: "backout",
                speed: 700,
                click: function(event, menuItem) {
                    return false;
                }
            });
        });
		
       
</script>

</head><body onclick="closeSubmenu();" onload="init();">
<div>	
	<div id="image1">
    	<img src="images/shield.png" width="150px"/>
    </div>
    <div id="image2">
    	<img src="images/shield.png" width="150px"/>
    </div>
  
<div id="main">
		<!-- header -->
	  <div id="header" style="height:auto;">
      	  
	  	  <div id="menu">
          		<ul class="lavaLampWithImage" id="1">
                	<li onmouseover="closeSubmenu();" <?php if($current == 0){?> class="current" <?php }?>><a href="index.php" onclick="window.location = this.href;">Home</a></li>
                    <li onmousedown="toggleSubmenu();" id="activities" <?php if($current == 1){?> class="current" <?php }?>><a href="#">Activities</a></li>
                    <li onmouseover="closeSubmenu();" <?php if($current == 2){?> class="current" <?php }?>><a href="gallery.php" onclick="window.location = this.href;">Gallery</a></li>
                    <li onmouseover="closeSubmenu();" <?php if($current == 3){?> class="current" <?php }?>><a href="council.php" onclick="window.location = this.href;">Council Page</a></li>
                    <li onmouseover="closeSubmenu();" <?php if($current == 4){?> class="current" <?php }?>><a href="alumni.php" onclick="window.location = this.href;">Alumni</a></li>
                    <li onmouseover="closeSubmenu();" <?php if($current == 5){?> class="current" <?php }?>><a href="#" onclick="window.location = this.href;">Contact Us</a></li>
                </ul>
                 
          </div>
         
          
          
            
        <div class="gallery">
            <img src="photos/1.jpg" alt="A papercraft AT-AT that I made" />
            <img src="photos/2.jpg" alt="My dog when she was a wee puppy" layout="portrait"/>
            <img src="photos/3.jpg" alt="A bit of Photoshop fun" />
            <img src="photos/4.jpg" class="start" alt="A woodburning of mine, inspired by Dark Tower series by Stephen King" />
            <img src="photos/5.jpg" alt="Another woodburning of mine, inspired by Dark Tower series by Stephen King" />
        
            <img src="photos/6.jpg" alt="Some lights in the lobby of the Rio in Vegas" />
            <img src="photos/7.jpg" alt="A baby lion at the MGM Grand" />
            <img src="photos/8.jpg" alt="Me dressed up as the Punisher for halloween + a bit of photoshop"/>
            <img src="photos/9.jpg" alt="A cake I made for my friend Matt" />
            <img src="photos/10.jpg" alt="A stained glass roof in Caesar's Palace" />
            <img src="photos/11.jpg" alt="A tower in Solvang" />
        </div>
        
        
    </div> 

		<div id="footer">
            <center>
                <ul>
                <li>Mess Menu</li>
                <li>Facebook Group</li>
                <li>Facebook Fan Page</li>
                <li>Library Book list</li>
                <li>LinkedIn group</li>
                <li>Sitemap</li>
                </ul>
			</center>
		</div>
        <div id="submenu" style="position:relative;top:-596px;z-index:10;">
                    <li><a href="sports.php">Sports</a></li>
                    <li><a href="cultural.php">Cultural</a></li>
                    <li><a href="mess.php">Mess</a></li>
                    <li><a href="maint.php">Maint</a></li>
                    <li><a href="comp.php">Comp</a></li>
       	</div>
	</div>
</div>   
</body>
</html>