// JavaScript Document

function toggleSubmenu()
{
	if(document.getElementById('submenu').style.display == "none") document.getElementById('submenu').style.display = "block";
	else if(document.getElementById('submenu').style.display == "block") document.getElementById('submenu').style.display = "none";
}

function closeSubmenu()
{
	if(document.getElementById('submenu').style.display == "block") document.getElementById('submenu').style.display = "none";
}

function getCumulativeOffset(obj) {
	var left, top;
	left = top = 0;
	if (obj.offsetParent) {
		do {
			left += obj.offsetLeft;
			top  += obj.offsetTop;
		} while (obj == obj.offsetParent);
	}
	return [left,top];
};

function getRelativeOffset(obj) {
	return [obj.offsetLeft,obj.offsetTop];
};
	
	
function init()
{	
	//obj = $("#activities")[0];
	//res = getCumulativeOffset(obj);
	//res[0]+=obj.offsetWidth;
	//res[1]+=50;
	document.getElementById('submenu').style.display = "none";
}

function change(obj)
{
	var pos = getCumulativeOffset(obj);
	pos[0]+=5;pos[0]+="px";
	pos[1]+=15;pos[1]+="px";
	var width = obj.offsetWidth;
	width+="px";
	$("#back").animate({width : width,left : pos[0]},"swing");
	//$("#back")[0].setAttribute("style","position:absolute;width:"+obj.offsetWidth+"px;left:"+pos[0]+"px;top:"+pos[1]+"px;");
}

function restore()
{
	var selected = $("#selected")[0];
	var pos = getCumulativeOffset(selected);
	pos[0]+=5;
	pos[1]+=15;
	pos[0]+=5;pos[0]+="px";
	pos[1]+=15;pos[1]+="px";
	var width = selected.offsetWidth;
	width+="px";
	$("#back").animate({width : width,left : pos[0]},"swing");
}

