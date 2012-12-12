<?php 
$current = 1;
include("./header.php");
?>
<div id="content">
                <div class="column1">
                    <h2>Welcome to Hostel 6 mess</h2>
                    <h4>Mess Timing</h4>
                    <table cellpadding="6px" cellspacing="6px">
                    <tr><td width="100px">Breakfast</td><td width="250px"><br/>7:45 am to 9:15 am <br/>
                                       (8:00 am to 9:30 on holidays)</td></tr>
                    <tr><td>Lunch</td><td>12:00 noon to 1:30 pm</td></tr>
                    <tr><td>Tiffin</td><td>4:30 pm to 6:00 pm</td></tr>
                    <tr><td>Dinner</td><td>7:30 pm to 9:00 pm</td></tr>
                    </table>
                </div>
                <div class="column2">
                    <h2>Complaint Box</h2>
                    <form id="form2" action="" enctype="multipart/form-data">
                        <div>
                            <div class="form"><input value="Name:" type="text" size="40"></div>
                            <div class="form"><input value="E-mail:" type="text" size="40">
                            </div>
                            <div class="form">
                              <textarea name="textarea" cols="40" rows="6">Message:</textarea>
                            </div>
                            <div>
                                <a class="txt1" href="http://www.aimarcherywa.com/site_flash/webmaster@aimarcherywa.com" onclick="document.getElementById('form2').reset()">clear</a>&nbsp; &nbsp;<a class="txt1" href="#" onclick="document.getElementById('form2').submit()">send</a>
                            </div>
                        </div>
                    </form>
                </div>
        		<div style="clear:both;padding:10px;">
              	Part of the secret of a success in life is to eat what you like and let the food fight it out inside .<br/>-  Mark Twain 
        		</div>
		</div>
<?php include("./footer.php"); ?>        