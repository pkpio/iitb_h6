<script>
$(document).ready(function() {
	  document.getElementById("loadingImage").style.visibility="hidden";})
</script>
<div id="TextContent">
<style>
#configDetails{
	position:relative;
	top:-420px;
	left:18px;
}
</style>
<h1>Find your Ip</h1>
<p>Please enter your room Number : <input type="text" maxlength="3" id="roomInput" size="5" style="padding:5px 10px 5px 10px; text-align:center; background-color:#5B0B32; color:#FFF; font-weight:bolder;" onKeyUp="ipaddress(this.value)" /></p>
</div>
<div id="configDetails">
<span class="blu">Ip address : &nbsp;</span><span id="ipAddress">10.6. or 10.6.</span><br/>
<span class="blu">Subnet &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;</span>255.255.224.0<br/>
<span class="blu">Gateway &nbsp;&nbsp;: &nbsp;</span><span id="Gateway">10.6..250</span><br/>
<span class="blu">DNS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;</span>10.200.1.11, 10.200.11.1 


<script>
function remain(num1,num2)
{return num1-(num2*Math.floor(num1/num2))}
function quot(num1,num2)
{return Math.floor(num1/num2)}
function vnum(room)
{
if(remain(room,100)<85)
{
return 6*(2-quot(remain(room,100),28))+3*quot(remain(remain(room,100),28),16)+1
}
else
{
return 19
}

}
function ipaddress(room)
{
	if(room>0&&room<=307){
		document.getElementById("ipAddress").innerHTML = "10.6."+vnum(room)+Math.floor(room/100)+"."+remain(room,100)+" or 10.6."+(vnum(room)+1)+Math.floor(room/100)+"."+remain(room,100);
		document.getElementById("Gateway").innerHTML =  "10.6."+(10*vnum(room))+".250";
	}
	else{
		document.getElementById("ipAddress").innerHTML = "10.6.";
		document.getElementById("Gateway").innerHTML =  "10.6..250";
		}
}
</script>