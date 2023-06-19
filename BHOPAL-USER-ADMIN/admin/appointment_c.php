

<?php

if(!isset($_GET["rid"]))

{

header("location:home2.php");

}

else {

$curdate=date("Y/m/d");

include ('db.php');

$id = $_GET['rid'];

$sql ="Select * from appoinment where id = '$id'";

$re = mysqli_query($con,$sql);

while($row=mysqli_fetch_array($re))

{

  

$fname = $row['fname'];

$gender = $row['gender'];

$age_group = $row['agegroup'];

// $lname = $row['LName'];

// $email = $row['Email'];

$place = $row['place'];

$phone = $row['phone'];
$date = $row['date'];
// $troom = $row['TRoom'];

// $nroom = $row['NRoom'];

// $non = $row['NRoom'];

// $cin = $row['cin'];

// $cout = $row['cout'];

$sta = $row['stat'];

// $days = $row['nodays'];

// $transport = $row['transport'];

$desies = $row['category'];

// $dog_name = $row['Dogname'];

// $nailcream= $row['Nailcream'];

// $spa_fac = $row['Spa_fac'];

// $transportation = $row['transportation'];

$bookby = $row['caseby'];
$timeslot = $row['timeslot'];
}

}

?> 

    <?php  

 include( 'sidebar.php');



?>

<div id="page-wrapper">

<div id="page-inner">

<div class="row">

<div class="col-md-12">

<h1 class="page-header">

Appointment Booking<small>	<?php echo  $curdate; ?> </small>

</h1>

</div>

<div class="col-md-8 col-sm-8">

<div class="panel panel-info">

<div class="panel-heading">

Appoinment Conformation

</div>

<div class="panel-body">

<div class="table-responsive">

<table class="table">

<tr>

<th>Description</th>

<th>Information</th>

</tr>

<tr>

<th>Booking Date</th>

<th><?php echo $curdate; ?> </th>

</tr>
<tr>

<th>Booking Time SLot</th>

<th><?php echo $timeslot; ?> </th>

</tr>

<tr>

<th>Name</th>

<th><?php echo $fname; ?> </th>

</tr>

<tr>



<tr>

<th>Place</th>

<th><?php echo $place;  ?></th>

</tr>

<tr>

<th>Phone No </th>

<th><?php echo $phone; ?></th>

</tr>

<tr>

<th>Book By </th>

<th><?php echo $bookby; ?></th>

</tr>

<tr>

<th>Status Level</th>

<th><?php echo $sta; ?></th>

</tr>

</table>



</div>

</div>

<div class="panel-footer">

<form method="post">


<div class="form-group">

<label>Select the Conformation</label>

<select name="conf"class="form-control">

<option value selected>	</option>

<option value="Confirm">Confirm</option>

</select>

</div>

<input type="submit" name="co" value="Confirm" class="btn btn-success">

</form>

</div>

</div>

</div>

</div>

<?php  

 include( 'footer.php');



?>
<?php
if(isset($_POST['co']))
{	
$st = $_POST['conf'];
if($st=="Confirm")
{
$urb = "UPDATE `appoinment` SET `stat`='$st' WHERE id = '$id'";
if( mysqli_query($con,$urb))
{	


if($desies=="cold cough")
{
    $doctor_s = "AMIT GURJAR";
}
else if($desies=="maleria")
{
    $doctor_s = "PRATEEKSHA GURJAR";
}
else if($desies=="typhoid")
{
    $doctor_s = "DEEPENDRA GURJAR";
}
else if($desies=="fever")
{
    $doctor_s = "SOURABH GURJAR";
}
else if($desies=="acidity")
{
    $doctor_s = "SUMIT GURJAR";
}

$psql = "INSERT INTO `final_appointment`(`id`, `fname`, `phone`, `gender`, `date`, `agegroup`, `disease_c`, `place`,`caseby`,`doctor_preferd`,`timeslot`) VALUES ('$id','$fname','$phone','$gender','$date','$age_group','$desies','$place','$bookby','$doctor_s','$timeslot')";
if(mysqli_query($con,$psql))
{
echo "<script type='text/javascript'> alert('Booking Conform')</script>";
echo "<script type='text/javascript'> window.location='home2.php'</script>";



    //                                     code for send email to user email id for confirm
    
                                                // $to = $gmail;
    
                                                // $subject = "BHOPAL HOSPITAL APPOINTMENT CONFIRM";
    
                                                // $txt = "Your Appointment sucessfully select thanks for booking";
    
                                                // $headers = "From: ";
    
                                                // mail($to,$subject,$txt,$headers);
    
                      
    
                                            
    



}
}
}			
}	

?>