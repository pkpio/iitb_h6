<script>
$(document).ready(function() {
	  document.getElementById("loadingImage").style.visibility="hidden";})
</script>
<div id="TextContent">
<style>
#TextContent input{
	padding:4px 10px 4px 10px;
	text-align:center;
}
</style>
<h1>Admin Login</h1>
<p>If your a hostel secy and looking for editing/adding new contents or updates please go to your corresponding section and login with your LDAP Id and password.<br/>
P.S.: We <span class="blu"><b>DONOT</b></span> store your LDAP credentials
</p><br/><br/>

<!--Comp Login-->
<h2>Comp Council Admin Login</h2>
<form action="admin/comp/index.php" method="post">
LDAP Id&nbsp; <input type="text" name="name" /><br>
Password <input type="password" name="password" />
<input type="submit" value="Login" />
</form><br/>

<!--Sports Login-->
<h2>Sports Council Admin Login</h2>
<form action="admin/sports/index.php" method="post">
LDAP Id&nbsp; <input type="text" name="name" /><br>
Password <input type="password" name="password" />
<input type="submit" value="Login" />
</form><br/>

<!--Cult Login-->
<h2>Cult Council Admin Login</h2>
<form action="admin/cult/index.php" method="post">
LDAP Id&nbsp; <input type="text" name="name" /><br>
Password <input type="password" name="password" />
<input type="submit" value="Login" />
</form><br/>

<!--Mess Login-->
<h2>Mess Council Admin Login</h2>
<form action="admin/mess/index.php" method="post">
LDAP Id&nbsp; <input type="text" name="name" /><br>
Password <input type="password" name="password" />
<input type="submit" value="Login" />
</form><br/>

<!--Maint Login-->
<h2>Maint Council Admin Login</h2>
<form action="admin/maint/index.php" method="post">
LDAP Id&nbsp; <input type="text" name="name" /><br>
Password <input type="password" name="password" />
<input type="submit" value="Login" />
</form><br/>

<!--Demo Login-->
<p>Curious to know how this works? I appreciate it, you are just like me. Here is a demo interface<br/>
P.S.: What ever you enter in the demo interface is seen by the person who logins next</p>
<h2>Demo Admin Login</h2>
<form action="admin/demo/index.php" method="post">
LDAP Id&nbsp; <input type="text" name="name" /><br>
Password <input type="password" name="password" />
<input type="submit" value="Login" />
</form><br/>

<p><span class="blu">NOTE : </span>If you are a secy and couldn't login with your LDAP please contact the site Admin,<br/>
<span class="blu"><b>Praveen Kumar Pendyala</b></span><br/>
<span class="blu">Mobile Number: </span>+91 882-882-9765<br/>
<span class="blu">Email Id: </span>praveen@praveenkumar.co.in</p>
</div>