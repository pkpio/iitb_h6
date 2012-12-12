<?php 
$current = 1;
include("./header.php"); 
?>
		<!-- content -->
	  <div id="content">
            <div style="float:right;padding:10px 10px 20px 60px;font-size:1.16em;">
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
                            <a class="txt1" href="" onclick="document.getElementById('form2').reset()">clear</a>&nbsp; &nbsp;<a class="txt1" href="#" onclick="document.getElementById('form2').submit()">send</a>
                        </div>
                    </div>
                </form>
            </div>
            <div style="padding:10px;font-size:1.16em;">
                <p> The maintenance committee looks after the general maintenance of the hostel, so that it can be a place where the students can live comfortably.</p>
                
                <p>We have various facilities made available for the students to use, some are:-</p>
                
                <ol><li>Lounge :- The stairs just right to the hall manager's leads to the lounge, which has T.T. table, library, a music room, and comp room.</li><br/>
                
                <li>T.V. Room :- The T.V room is just connected with the mess.Besides having a big screen T.V.,it has newspapers, bucket chairs, and one window of canteen is accessible to students from this room.It becomes an ideal place for students to relax after a long day at lectures.</li><br/>
                
                <li>Washing and Ironing Room :- room no. 45-46 of the hostel, here every hostelite can get their clothes washed and ironed.</li></ol>
                
                Other facilities include :- Pool room,Gym room,Xerox shop.<br/>
                
                <p>All these facilities are for hostelites and we expect that all students use them responsibly, so that all of us can make the best use of these.</p>
            </div>
            
        	
	  </div>

<?php include("./footer.php"); ?>