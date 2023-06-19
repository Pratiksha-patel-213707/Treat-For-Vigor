<?php
include 'db.php';
?>
<?php
include 'sidebar.php';
?>

<div id="page-wrapper" >              
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                        MESSAGE TO MAIN ADMIN<small> </small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
				 
				 
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                        <div class="container">                

<div class="row">


<div class="col-lg-2"></div>
    <div class="col-md-8 col-sm-8">

        <div class="panel panel-warning">

            <div class="panel-heading">

                MESSAGE TO MAIN ADMIN

            </div>

            <div class="panel-body">

            <form name="form" method="post">

       

       <?php

            date_default_timezone_set("Asia/kolkata");

                $Format = 'Y-m-d';

                $FDT = date($Format);

        ?>

        

        <div class="form-group">

                                <label>Name</label>

                                <input name="fname" class="form-control" placeholder="Enter First Name" required>

                                

                   </div>

                   

                   <div class="form-group">

                                <label>Email</label>

                                <input name="email" type="email" class="form-control" placeholder="Enter Email Id" required>

                                

                   </div>

                  

            

            
                    <div class="form-group">

                                <label>Phone Number</label>

                                <input name="phone" type ="number" class="form-control" placeholder="Enter Phone No" required>

                                

                   </div>
                   <div class="form-group">

<label>Message</label>

<input name="message" type ="text" class="form-control" placeholder="Enter Phone No" required>



</div>


                

<input type="submit" name="submit" class="btn btn-warning">



                

                   

            </div>
            <?php

if(isset($_POST['submit']))

{
    $location = 1;
            $newUser="INSERT INTO messagec( fname, email, Phone,message,location) VALUES ('$_POST[fname]','$_POST[email]','$_POST[phone]','$_POST[message]','$location')";

            if (mysqli_query($con,$newUser))

            {

                echo "<script type='text/javascript'> alert('Your message has been sent to admin')</script>";

                

            }

            else

            {

                echo "<script type='text/javascript'> alert('Error adding user in database')</script>";

                

            }

        }



$msg="Your code is correct";




?>

</form>

            

        </div>

    </div>
<div class="col-lg-2"></div>
                            </div>
            </div>
                <!-- /. ROW  -->
            
                </div>
               
            </div>
        
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
            
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>

