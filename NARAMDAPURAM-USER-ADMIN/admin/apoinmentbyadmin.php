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
                        Appoinment Form<small> </small>
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

                Personal Details

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

                   

                   <!-- <div class="form-group">

                                <label>Email</label>

                                <input name="email" type="email" class="form-control" placeholder="Enter Email Id" required>

                                

                   </div> -->

                  

            

            
                    <div class="form-group">

                                <label>Phone Number</label>

                                <input name="phone" type ="number" class="form-control" placeholder="Enter Phone No" required>

                                

                   </div>
                   <div class="form-group">

<label>Gender</label>

<input name="gender"  class="form-control" placeholder="Enter Gender" required>



</div>

<div class="form-group">

<label>Age Group</label>

<select name="agegroup" class="form-control" required>

    <option value selected ></option>
    <option value="14-17">14-17</option>
    <option value="18-21">18-21</option>
	<option value="22-25">22-25</option>
    <option value="26-29">26-29</option>
    <option value="30-33">30-33</option>
    <option value="34-37">34-37</option>
    <option value="38-41">38-41</option>

</select>

</div>
                
<div class="form-group">

<label>Category</label>

<select name="category" class="form-control" required>

    <option value selected ></option>
    <option value="cold cough">cold cough</option>
    <option value="maleria">maleria</option>
	<option value="typhoid">typhoid</option>
    <option value="fever">fever</option>
    <option value="acidity">acidity</option>


</select>

</div>


<input type="submit" name="submit" class="btn btn-warning">



                

                   

            </div>
            <?php
$curdate=date("Y/m/d");
if(isset($_POST['submit']))

{
    $place = "NARAMDAPURAM";
    $caseby = "BY ADMIN";
            $newUser="INSERT INTO appoinment( fname, phone,gender,agegroup,category,place,date,caseby) VALUES ('$_POST[fname]','$_POST[phone]','$_POST[gender]','$_POST[agegroup]','$_POST[category]','$place','$curdate','$caseby')";

            if (mysqli_query($con,$newUser))

            {

                echo "<script type='text/javascript'> alert('Your Record has been sent to admin')</script>";

                

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

