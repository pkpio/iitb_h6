<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<link href="css/default.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/default.js"></script>
<script type="text/javascript" src="js/jquery-1.2.3.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/jquery.lavalamp.min.js"></script>

<title>VIKINGS - Hostel 6</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Style-Type" content="text/css">

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

</head><body onload="init();">
<div onclick="closeSubmenu();">	
	<div id="image1">
    	<img src="images/shield.png" width="150px"/>
    </div>
    <div id="image2">
    	<img src="images/shield.png" width="150px"/>
    </div>
  
<div id="main">
		<!-- header -->
	  <div id="header">
      	  
	  	  <div id="menu">
          		<ul class="lavaLampWithImage" id="1">
                	<li onmouseover="closeSubmenu();" <?php if($current == 0){?> class="current" <?php }?>><a href="index.php" onclick="window.location = this.href;">Home</a></li>
                    <li onmousedown="toggleSubmenu();" id="activities" <?php if($current == 1){?> class="current" <?php }?>><a href="#">Activities</a></li>
                    <li onmouseover="closeSubmenu();" <?php if($current == 2){?> class="current" <?php }?>><a href="gallery.php" onclick="window.location = this.href;">Gallery</a></li>
                    <li onmouseover="closeSubmenu();" <?php if($current == 3){?> class="current" <?php }?>><a href="council.php" onclick="window.location = this.href;">Council Page</a></li>
                    <li onmouseover="closeSubmenu();" <?php if($current == 4){?> class="current" <?php }?>><a href="alumni.php" onclick="window.location = this.href;">Alumni</a></li>
                    <li onmouseover="closeSubmenu();" <?php if($current == 5){?> class="current" <?php }?>><a href="contact.php" onclick="window.location = this.href;">Contact Us</a></li>
                </ul>
                 
          </div>
         
          <div id="movie">
          </div>
          <div id="submenu">
                    <li><a href="sports.php">Sports</a></li>
                    <li><a href="cultural.php">Cultural</a></li>
                    <li><a href="mess.php">Mess</a></li>
                    <li><a href="maint.php">Maint</a></li>
                    <li><a href="comp.php">Comp</a></li>
       	  </div>
</div>

<div style="clear:both;"></div>