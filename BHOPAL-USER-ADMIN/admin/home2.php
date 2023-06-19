<?php  

 include( 'sidebar.php');



?>

        <!-- /. NAV SIDE  -->

        <div id="page-wrapper">

            <div id="page-inner">





                <div class="row">

                    <div class="col-md-12">

                        <h1 class="page-header">

                            Status <small>Appointment Booking </small>

                        </h1>

                    </div>

                </div>

                <!-- /. ROW  -->

				<?php

						include ('db.php');

						$sql = "select * from appoinment";

						$re = mysqli_query($con,$sql);

						$c =0;

						while($row=mysqli_fetch_array($re) )

						{

								$new = $row['stat'];

								// $cin = $row['cin'];

								$id = $row['id'];

								if($new=="Not Confirm")

								{

									$c = $c + 1;

									

								

								}

						

						}

						

									

									



						

				?>



					<div class="row">

                <div class="col-md-12">

                    <div class="panel panel-default">

                        <div class="panel-heading">

                            

                        </div>

                        <div class="panel-body">

                            <div class="panel-group" id="accordion">

							

							<div class="panel panel-primary">

                                    <div class="panel-heading">

                                        <h4 class="panel-title">

                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">

											<button class="btn btn-default" type="button">

												 New Appointment Bookings  <span class="badge"><?php echo $c ; ?></span>

											</button>

											</a>

                                        </h4>

                                    </div>

                                    <div id="collapseTwo" class="panel-collapse in" style="height: auto;">

                                        <div class="panel-body">

                                           <div class="panel panel-default">

                        

                        <div class="panel-body">

                            <div class="table-responsive">

                                <table class="table">

                                    <thead>

                                        <tr>

                                        <th scope="col">ID</th>

                                            <th scope="col">Name</th>

                                          

                                            <th scope="col">Book By</th>

                                            <th scope="col">Date</th>
                                            <th scope="col">Time Slot</th>
                                            <th scope="col">Phone no</th>

                                            <th scope="col">Disease</th>

                                             <th scope="col">Booking </th>

                                            <th scope="col">Delete</th>

											

                                            <th scope="col"></th>

											

                                        </tr>

                                    </thead>

                                    <tbody>

                                        

									<?php
$tsql = "SELECT appoinment.id ,appoinment.fname,appoinment.phone,appoinment.gender,appoinment.agegroup,appoinment.category,appoinment.caseby,appoinment.date,appoinment.stat  , appoinment.timeslot FROM appoinment WHERE appoinment.place = 'BHOPAL'";
                                    
									// $tsql = "select * from appoinment  WHERE appoinment.place = 'BHOPAL' && appoinment.caseby = 'BY ADMIN'";

									$tre = mysqli_query($con,$tsql);

									while($trow=mysqli_fetch_array($tre) )

									{	

										$co =$trow['stat']; 

										if($co=="Not Confirm")

										{

											echo"<tr>

                                            <td>$trow[id]</td>

                                            <td>$trow[fname]</td>

                                          

                                            <td>$trow[caseby]</td>

                                            <td>$trow[date]</td>
                                            <td>$trow[timeslot]</td>
                                            <td>$trow[phone]</td>

                                            <td>$trow[category]</td>

											<th><a href='appointment_c.php?rid=".$trow['id']." ' class='btn btn-primary'>Confirm</a></th>

											<td><a href=deleterecordfromhome.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>

                                              

                                            </tr>";

										}	

									

									}

									?>

                                        

                                    </tbody>

                                </table>

								

                            </div>

                        </div>

                    </div>

                      <!-- End  Basic Table  --> 

                                        </div>

                                    </div>

                                </div>

								<?php

								

								$rsql = "SELECT * FROM `appoinment`";

								$rre = mysqli_query($con,$rsql);

								$r =0;

								while($row=mysqli_fetch_array($rre) )

								{		

										$br = $row['stat'];

										if($br=="Confirm")

										{

											$r = $r + 1;

											

											

											

										}

										

								

								}

						

								?>

                                

              </div>

<?php  

 include( 'footer.php');



?>