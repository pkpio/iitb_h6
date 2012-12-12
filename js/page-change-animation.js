$(document).ready(function() {
  $("#menu a").click(function(){
  	$page=this.id;$name=this.name;
	document.getElementById("loadingImage").style.visibility="visible";
  	$('#content').load('content/'+$page+'.php');
	window.location.href="#!/"+$page;
	document.title = $name;
	return false;
  });
  
  $("#footer a").click(function(){
  	$page=this.id;$name=this.name;
	document.getElementById("loadingImage").style.visibility="visible";
  	$('#content').load('content/'+$page+'.php');
	window.location.href="#!/"+$page;
	document.title = $name;
	return false;
  });
});