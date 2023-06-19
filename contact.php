<?php
include 'header.php'
?>
<?php
include 'db.php'
?>

<style>
    media only screen and (max-width:767px){
        .location{
            flex-basis: 100%;
        }
    }
</style>
<div id="main">
        <img style="width: 100%; height: 70%; " autoplay loop muted src="contactusv.gif"></img>
        <!-- <div id="top">
           
        </div> -->
    </div>
            </div>
            <div style="margin-top: 150px; margin-bottom: 393px;" class="container-fluid padddd">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 padddd">
                    <div class="map_section">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                    <form class="main_form" method="post">
                                        <div class="row">

                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <input class="form-control" placeholder="Name" type="text" name="first_name" required>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <input class="form-control" placeholder="Email" type="text" name="email" required>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <input class="form-control" placeholder="Phone" type="number" name="contact_datail" required>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <input class="form-control" placeholder="Address" type="text" name="address1" required>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <textarea class="textarea" placeholder="Message" type="text" name="Message" required></textarea>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                        </form> 
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" style="
    margin-top: -95px;
">

                                <div class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733223.4919059603!2d78.42099679999998!3d23.970125000000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39667381d35aea05%3A0xe0106b0d4e701c1e!2sMadhya%20Pradesh!5e0!3m2!1sen!2sin!4v1681276402155!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div >

</div>




                            </div>
                    </div>
                </div>
            </div>

        </div>


        <?php
        
if(isset($_POST['submit']))
{
            $newUser="INSERT INTO contact( name_1, email_1, phone_no,address_1 , message_1) VALUES ('$_POST[first_name]','$_POST[email]','$_POST[contact_datail]','$_POST[address1]','$_POST[Message]')";
            if (mysqli_query($con,$newUser))
            {
                echo "<script type='text/javascript'> alert('Your Details has been sent')</script>";
                
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


