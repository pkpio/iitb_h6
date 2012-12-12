<?php
//Defining Variables for holding page names....
$Home			=	'home.html' ;
$Activities		=	'activities.html' ;
$Gallery		=	'gallery.html' ;
$CouncilPage	=	'councilpage.html' ;
$Alumni			=	'alumni.html' ;
$ContactUs		=	'contactus.html' ;

//Retreiving page content and Defining Variables for holding page data....

//Home...
$fd = fopen($Home,"r");
$Home = fread($fd, filesize($Home));
fclose($fd);

//Activities...
$fd = fopen($Activities,"r");
$Activities = fread($fd, filesize($Activities));
fclose($fd);

//Gallery...
$fd = fopen($Gallery,"r");
$Gallery = fread($fd, filesize($Gallery));
fclose($fd);

//CouncilPage...
$fd = fopen($CouncilPage,"r");
$CouncilPage = fread($fd, filesize($CouncilPage));
fclose($fd);

//Alumni...
$fd = fopen($Alumni,"r");
$Alumni = fread($fd, filesize($Alumni));
fclose($fd);

//ContactUs...
$fd = fopen($ContactUs,"r");
$ContactUs = fread($fd, filesize($ContactUs));
fclose($fd);

?>
<!DOCTYPE >
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>Hostel 06</title>
        <link href='h6.ico' rel='icon' type='image/x-icon'/>
		<link rel="stylesheet" type="text/css" href="animate/reset_html5.css">
		<link rel="stylesheet" type="text/css" href="animate/flip_099.css">
		<!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<link rel="stylesheet" type="text/css" href="/lab/flip/flip_ie.css"/>
		<![endif]-->		
		<script type="text/javascript">
		  // Load jQuery
		  google.load("jquery", "1");	
		</script><script src="animate/jquery_002.js" type="text/javascript"></script>
		<script src="animate/jquery-ui-1.js"></script>
		<script src="animate/jquery.js"></script>
		<script type="text/javascript">
			$(function(){
				
				$("#flipPad a:not(.revert)").bind("click",function(){
					var $this = $(this);
					$("#flipbox").flip({
						direction: $this.attr("rel"),
						color: $this.attr("rev"),
						content: $this.attr("content"),//(new Date()).getTime(),
						onBefore: function(){$(".revert").show()}
					})
					return false;
				});
				
				$(".revert").bind("click",function(){
					$("#flipbox").revertFlip();
					return false;
				});
				
				
				$(".downloadBtn").click(function(){
					pageTracker._trackPageview('download_flip');
				});	
				
				setTimeout(changeMailTo,500);
				
			});
		</script>					
	</head>
	<body>
    <div id="header"><img class="shield" src="shield.png" /><img class="header" src="images/header.png" /><img class="shield" src="shield.png" /></div>
	
		<div id="body">
					<div id="flipPad">
						<a href="#" class="left" rel="rl" rev="#39AB3E" content="<?php echo $Home ; ?>">Home</a>
						<a href="#" class="right" rel="lr" rev="#C8D97E" content="<?php echo $Activities ; ?>">Activities</a>
						<a href="#" class="bottom" rel="tb" rev="#82BD2E" content="<?php echo $Gallery ; ?>">Gallery</a>
						<a href="#" class="right" rel="lr" rev="#C8D97E" content="<?php echo $CouncilPage ; ?>">Council Page</a>
						<a href="#" class="left" rel="rl" rev="#39AB3E" content="<?php echo $Alumni ; ?>">Alumni</a>
						<a href="#" class="bottom" rel="tb" rev="#82BD2E" content="<?php echo $ContactUs ; ?>">Contact Us</a>
                     </div>
               
               <div style="visibility: visible; background-color: rgb(57, 171, 62);" id="flipbox"><?php echo $Home ; ?></div>
               <div id="share" style="position:absolute; left: 1177px; top: 261px;"><?php include_once 'share.php' ; ?></div>

<div id="footer">
    <a href="http://gymkhana.iitb.ac.in/~hostel6/messmenu.pdf" target="_new">Mess Menu</a>
    <a href="http://www.facebook.com/groups/112988765387829/" target="_new">Facebook Group</a>
    <a href="http://www.facebook.com/pages/VI-Kings-Hostel-6-IIT-Bombay/153075061382500" target="_new">Facebook Fan Page</a>
    <a href="#">Library Book List</a>
    <a href="#">Forum</a>
    <a href="http://gymkhana.iitb.ac.in/~hostel6/ip.html" target="_new">Find your ip</a>
</div>

<div align="center" id="developer"><br/>Website Developed and Designed by :: <a href="http://www.facebook.com/pamarru" target="_new">Praveen Kumar Pendyala</a></div>
</div><br/>
</body></html>