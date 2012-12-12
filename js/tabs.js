// JavaScript Document
$(document).ready(function() {
  $("ul.tabs a").click(function(){
  	$page=this.id;
	$("#tabDisplay").fadeOut(300,function(){
	document.getElementById("tabDisplay").innerHTML = document.getElementById($page+"1").innerHTML;
	});
	$("#tabDisplay").fadeIn(300);
	return false;
  });
});