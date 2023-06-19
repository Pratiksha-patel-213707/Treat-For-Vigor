<?php
include 'header.php'
?>
<?php
include 'admin/db.php'
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   

<style>
    media only screen and (max-width:767px){
        .location{
            flex-basis: 100%;
        }
    }
</style>    <div class="bradcam_area breadcam_bg1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcam_text text-center">
                        <h3>Appointment Form</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end -->

<div class="container-fluid">
    <div class="row">
   
        <div class="col-lg-3"></div>
    <div class="col-lg-6"  style="margin-top: 67px;  margin-bottom: 7px;  font-size: larger; font-weight: bold;">
         <form name="form" method="post">
        <h4 style="font-weight: bold; ">Enter  Name</h4>
     
        <input name="fname" class="form-control" placeholder="Enter First Name" required>
 <br>
      <h4 style="font-weight: bold;  ">Enter Contact</h4>
      <input name="phone" type ="number" class="form-control" placeholder="Enter Phone No" required>
<br>
      <h4 style="font-weight: bold; ">Gender</h4>
      
<input name="gender"  class="form-control" placeholder="Enter Gender" required>
 <br>
 <div class="form-group">

 <h4 style="font-weight: bold; ">Age Group</h4>
     

<select name="agegroup" class="form-control" required>

    <option value selected >Select Value</option>
    <option value="14-17">14-17</option>
    <option value="18-21">18-21</option>
	<option value="22-25">22-25</option>
    <option value="26-29">26-29</option>
    <option value="30-33">30-33</option>
    <option value="34-37">34-37</option>
    <option value="38-41">38-41</option>

</select>

</div> 

<div class="form-roup">

<h4 style="font-weight: bold; ">Diseases</h4>

<select name="category" class="form-control" required>

    <option value selected >Select Value</option>
    <option value="cold cough">cold cough</option>
    <option value="maleria">maleria</option>
	<option value="typhoid">typhoid</option>
    <option value="fever">fever</option>
    <option value="acidity">acidity</option>


</select>

</div>

      <center>   <button style=" margin-top: 20px;" type="submit" name="submit" class="btn btn-warning">Submit</button>
       </center>   
    </form>
    </div>
   
    <!-- <div class="col-lg-5"  style="margin-top: 7px; margin-bottom: 7px;  font-size: larger; font-weight: bold;">
        <img src='https://pawsthedogsplanet.com/img/freepic-dog.webp'>
        
        </div> -->
   
</div>
</div>
<?php
$curdate=date("Y/m/d");
if(isset($_POST['submit']))

{
    $place = "GADARWARA";
    $caseby = "BY USER";
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








<?php
include 'footer.php'
?>


