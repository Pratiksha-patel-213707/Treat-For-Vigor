<?php  
session_start();  
if(!isset($_SESSION["usname"]))
{
 header("location:index.php");
}
?> 
<?php
include ('db.php');

$pid = $_GET['pid'];	

$sql ="select * from final_appointment where id = '$pid' ";

$re = mysqli_query($con,$sql);

while($row=mysqli_fetch_array($re))

{

$id = $row['id'];

$fname = $row['fname'];

$phone = $row['phone'];

$gender = $row['gender'];

$date = $row['date'];

// $transportation = $row['transportation'];

$agegroup = $row['agegroup'];

$disease = $row['disease_c'];

$place = $row['place'];

$caseby = $row['caseby'];

$doctor = $row['doctor_preferd'];
$timeslot = $row['timeslot'];
// $days = $row['noofdays'];	

}

 ?>






<html>

	<head>

		<meta charset="utf-8">

		<title>Invoice</title>

		<link rel="stylesheet" href="style.css">

		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">

		<script src="script.js"></script>

		<style>

		/* reset */



*

{

	border: 0;

	box-sizing: content-box;

	color: inherit;

	font-family: inherit;

	font-size: inherit;

	font-style: inherit;

	font-weight: inherit;

	line-height: inherit;

	list-style: none;

	margin: 0;

	padding: 0;

	text-decoration: none;

	vertical-align: top;

}



/* content editable */



*[contenteditable] { border-radius: 0.25em; min-width: 1em; outline: 0; }



*[contenteditable] { cursor: pointer; }



*[contenteditable]:hover, *[contenteditable]:focus, td:hover *[contenteditable], td:focus *[contenteditable], img.hover { background: #DEF; box-shadow: 0 0 1em 0.5em #DEF; }



span[contenteditable] { display: inline-block; }



/* heading */



h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }



/* table */



table { font-size: 75%; table-layout: fixed; width: 100%; }

table { border-collapse: separate; border-spacing: 2px; }

th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }

th, td { border-radius: 0.25em; border-style: solid; }

th { background: #EEE; border-color: #BBB; }

td { border-color: #DDD; }



/* page */



html { font: 16px/1 'Open Sans', sans-serif; overflow: auto; padding: 0.5in; }

html { background: #999; cursor: default; }



body { box-sizing: border-box; height: 11in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 8.5in; }

body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }



/* header */



header { margin: 0 0 3em; }

header:after { clear: both; content: ""; display: table; }



header h1 { background: #000; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; }

header address { float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }

header address p { margin: 0 0 0.25em; }

header span, header img { display: block; float: right; }

header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }

header img { max-height: 100%; max-width: 100%; }

header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }



/* article */



article, article address, table.meta, table.inventory { margin: 0 0 3em; }

article:after { clear: both; content: ""; display: table; }

article h1 { clip: rect(0 0 0 0); position: absolute; }



article address { float: left; font-size: 125%; font-weight: bold; }



/* table meta & balance */



table.meta, table.balance { float: right; width: 41%; }

table.meta:after, table.balance:after { clear: both; content: ""; display: table; }



/* table meta */



table.meta th { width: 40%; }

table.meta td { width: 60%; }



/* table items */



table.inventory { clear: both; width: 100%; }

table.inventory th { font-weight: bold; text-align: center; }



table.inventory td:nth-child(1) { width: 26%; }

table.inventory td:nth-child(2) { width: 38%; }

table.inventory td:nth-child(3) { text-align: right; width: 12%; }

table.inventory td:nth-child(4) { text-align: right; width: 12%; }

table.inventory td:nth-child(5) { text-align: right; width: 12%; }



/* table balance */



table.balance th, table.balance td { width: 50%; }

table.balance td { text-align: right; }



/* aside */



aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }

aside h1 { border-color: #999; border-bottom-style: solid; }



/* javascript */



.add, .cut

{

	border-width: 1px;

	display: block;

	font-size: .8rem;

	padding: 0.25em 0.5em;	

	float: left;

	text-align: center;

	width: 0.6em;

}



.add, .cut

{

	background: #9AF;

	box-shadow: 0 1px 2px rgba(0,0,0,0.2);

	background-image: -moz-linear-gradient(#00ADEE 5%, #0078A5 100%);

	background-image: -webkit-linear-gradient(#00ADEE 5%, #0078A5 100%);

	border-radius: 0.5em;

	border-color: #0076A3;

	color: #FFF;

	cursor: pointer;

	font-weight: bold;

	text-shadow: 0 -1px 2px rgba(0,0,0,0.333);

}



.add { margin: -2.5em 0 0; }



.add:hover { background: #00ADEE; }



.cut { opacity: 0; position: absolute; top: 0; left: -1.5em; }

.cut { -webkit-transition: opacity 100ms ease-in; }



tr:hover .cut { opacity: 1; }



@media print {

	* { -webkit-print-color-adjust: exact; }

	html { background: none; padding: 0; }

	body { box-shadow: none; margin: 0; }

	span:empty { display: none; }

	.add, .cut { display: none; }

}



@page { margin: 0; }

		</style>

		

	</head>

	<body>

	

	

	

	

	<?php

	ob_start();	

	include ('db.php');



	$pid = $_GET['pid'];

	$curdate=date("d/m/Y");

	

	

	$sql ="select * from final_appointment where id = '$pid' ";

	$re = mysqli_query($con,$sql);

	while($row=mysqli_fetch_array($re))

	{

		$id = $row['id'];

		$fname = $row['fname'];

$phone = $row['phone'];

$gender = $row['gender'];

$date = $row['date'];

// $transportation = $row['transportation'];

$agegroup = $row['agegroup'];

$disease = $row['disease_c'];

$place = $row['place'];

$caseby = $row['caseby'];
$timeslot = $row['timeslot'];

$doctor = $row['doctor_preferd'];

	

	}



		


	?>

		<header>

			<h1 style="font-size: 1rem; background-color: rgb(73, 108, 25);">Appointment From Bhopal Hospital</h1>

			<address >

				<br>

				<h2 style="font-size: 1.6rem; font-weight: bold; color: brown;"><br>Hospital Head <br>  Near Something something, MP Nagar<br> +91 7489254540 </h2>
<!-- 
				<h3 style="font-size: 1.3rem;"><br></h3> -->
<!-- 
				<h3 style="font-size: 1.3rem;">+91 9752612222</h3> -->

			</address>

			<br>

			<span style="width: 29%;"><img alt="" src="../img/head-png.png"></span>

		</header>

		<article>

			<h1>Recipient</h1>

			<address >	

				<p>Dr :- <?php echo $doctor; ?> <br><br></p>
                <p>Case Category<?php echo $disease;?> <br></p>

			</address>

            

			<table class="meta">

				<tr>

					<th><span >ID</span></th>

					<td><span ><?php echo $id; ?></span></td>

				</tr>

				<tr>

					<th><span >Date</span></th>

					<td><span ><?php echo $curdate; ?> </span></td>

				</tr>

				<tr>

					<th><span >Time Slot</span></th>

					<td><span ><?php echo $timeslot; ?> </span></td>

				</tr>

				

			</table>

            

			<table class="inventory">

                

				<thead>

					<tr>

						<th><span >Patient Name</span></th>

						<th><span >Phone No</span></th>

						<th><span >Disease</span></th>

						<th><span >Age Group</span></th>


					</tr>

				</thead>

				<tbody>

					<tr>

						<td><span ><?php echo $fname; ?></span></td>

						<td><span ><?php echo $phone; ?> </span></td>

						

						<td><span ><?php echo $disease;?> </span></td>

						
	

						<td><span ><?php echo $agegroup;?> </span></td>
					</tr>

                    </tbody>

                    <thead>

					<!-- <tr>

						<th><span >Transportation charge</span></th>

						<th><span >Rent</span></th>

						

					</tr> -->

				</thead>

                <tbody>

					<!-- <tr>

						<td><span >From <?php echo $place; ?> </span></td>

					

						



						<td><span data-prefix>₹</span><span><?php echo $transport; ?></span></td>

					</tr> -->

				

				</tbody>





                <!-- <thead>

					<tr>

						<th><span >GST PERCENTAGE</span></th>

						<th><span >AMOUNT</span></th>

						

					</tr>

				</thead>

                <tbody>

					<tr>

						<td><span >18%</span></td>

					

						



						<td><span data-prefix>₹</span><span><?php echo $gstformula; ?></span></td>

					</tr>

				

				</tbody> -->

			</table>

			

			<!-- <table class="balance">

				<tr>

					<th><span >ROOM CHARGE</span></th>

					<td><span data-prefix>₹</span><span><?php echo $ttot; ?></span></td>

				</tr>

				<tr>

					<th><span >TRANSPORTATION</span></th>

					<td><span data-prefix>₹</span><span ><?php echo $transport; ?></span></td>

				</tr>

				<tr>

					<th><span >NAIL CREAM  </span></th>

					<td><span data-prefix>₹</span><span><?php echo $amountnail; ?></span></td>

				</tr>

                 <tr>

					<th><span >SPA Charge</span></th>

					<td><span data-prefix>₹</span><span><?php echo $amountspa; ?></span></td>

				</tr> 

				<tr>

					<th><span > GST</span></th>

					<td><span data-prefix>₹</span><span><?php echo $gstformula; ?></span></td>

				</tr>

                <tr>

					<th><span >FINAL TOTAL with GST</span></th>

					<td><span data-prefix>₹</span><span><?php echo $transportfinalwithgst; ?></span></td>

				</tr>

			</table> -->

		</article>

		<!-- <aside>

			<h1 style="color: black; font-size: 1.8rem; font-weight: bold;"><span > Contact Us</span></h1>

			<div>

				<h2 style="color: orange; font-size: 1.1rem; font-weight: bold;" align="center">Email :- pawsthedogsplanet@gmail.com <br> <br>   Phone :-  +91 97134 14721<br> <br>  Instagram :-  @pawsdogplanet</h2>

			</div>

		</aside> -->

	

		<!-- <div>

			<br><br>

			 <a  href="infotek_solution.pdf"  style="margin-top: 90px; background-color: #8aa01c; width: 1000px; height: 100px; border: 2px solid black;  border-radius: 10px; margin-left: 320px; "download>Download your pdf</a>

			</div>

		 -->

         <!-- <br><br>

         <button style="border: 2px solid black; background-color: #999; width: 70px; height: 20px; margin-left: 300px; margin-top: 30px; border-radius: 20px;" onclick = "myfun()">Print Bill </button> -->

         <Script >

            function myfun(){

                window.print();

            }



         </Script>

	</body>

</html>

<?php

$free="Free";

$nul = null;

$rpsql = "UPDATE `room` SET `place`='$free',`cusid`='$nul' where `cusid`='$id'";

if(mysqli_query($con,$rpsql))

{

	$delsql= "DELETE FROM `roombook` WHERE id='$id' ";

	

	if(mysqli_query($con,$delsql))

	{

	

	}

}

?>