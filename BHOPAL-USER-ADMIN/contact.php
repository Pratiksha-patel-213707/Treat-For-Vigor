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
</style>    <div class="bradcam_area breadcam_bg2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcam_text text-center">
                        <h3>Contact Us</h3>
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
      <h4 style="font-weight: bold; ">Address</h4>
      
<input name="address"  class="form-control" placeholder="Enter Address" required>
 <br>
 <h4 style="font-weight: bold; ">Message</h4>
      
<input name="message"  class="form-control" placeholder="Enter Message" required>
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
    $place = "BHOPAL";
  
            $newUser="INSERT INTO mes_by_u_to_h_head( fname, phone,address,message,place,date) VALUES ('$_POST[fname]','$_POST[phone]','$_POST[address]','$_POST[message]','$place','$curdate')";

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


