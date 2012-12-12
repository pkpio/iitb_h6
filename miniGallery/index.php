<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>

    <head>

        <link rel="stylesheet" href="miniGallery/css/style.css" type="text/css" media="screen"/>

        <style>

            *{

                margin:0;

                padding:0;

            }

            body{

                font-family:Georgia,Times,serif;

               

            }

            a.back{

              

                position:fixed;

                width:150px;

                height:27px;

                outline:none;

                top:0px;

                right:0px;

            }

         

        </style>

    </head>

    <body>

        <div >
            <div id="mG1" class="microGallery" style="margin:-7px 0px 16px 4px;" >

                 <img  src="miniGallery/Gallery/cisco_logo.jpg">

              <img  src="miniGallery/Gallery/ibm_logo.jpg">

              <img  src="miniGallery/Gallery/Imagination-Technologies_logo.jpg" >

              <img  src="miniGallery/Gallery/intel_logo.jpg"  >

              <img  src="miniGallery/Gallery/national-instruments-logo.jpg" >

              <img  src="miniGallery/Gallery/NVIDIA_logo.jpg" >

              <img  src="miniGallery/Gallery/tata_logo.jpg">

              <img  src="miniGallery/Gallery/tcs_logo.png" >

              <img  src="miniGallery/Gallery/Texas-Instruments-logo-design.png" >

              <img  src="miniGallery/Gallery/virgin_logo.jpg" >

            </div>

            

        </div>

        <!-- The JavaScript -->

        <script type="text/javascript" src="miniGallery/jquery.min.js" ></script>

        <script type="text/javascript" src="miniGallery/jquery.microgallery.js"></script>

        <script type="text/javascript">

            $(function() {

				

                $("#mG1").microgallery({

                     menu		:false,

                    size		:'medium',

                    mode		:'single',

                    cycle               :true,

                    autoplay            :true,	/* the autoplay can only exist if circular is true */

                    autoplayTime        :2000

                });

                

            });

        </script>

    </body>

</html>