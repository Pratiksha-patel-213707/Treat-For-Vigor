<?php
include 'sidebar.php';
?>

        <!-- /. NAV SIDE  -->

       

        <div id="page-wrapper" >

            <div id="page-inner">

			 <div class="row">

                    <div class="col-md-12">

                        <h1 class="page-header">

                           ADMINISTRATOR<small> accounts </small>

                        </h1>

                    </div>

                </div> 

                 

                                 
                

            <div class="row">

                <div class="col-md-12">

                    <!-- Advanced Tables -->

                    <div class="panel panel-default">

                        <div class="panel-body">

                            <div class="table-responsive">

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                                    <thead>

                                        <tr>

                                            <th>User ID</th>
                                            <th>Location</th>
                                            <th>Name</th>

											<th>User name</th>

                                            <th>Password</th>

                                            

											<th>Update</th>

											<th>Remove</th>

                                            

                                        </tr>

                                    </thead>

                                    <tbody>

                                        

                                    </tbody>

                                </table>

                            </div>

                            

                        </div>

                    </div>

                    <!--End Advanced Tables -->

					<div class="panel-body">

                            <button class="btn btn-primary btn" data-toggle="modal" data-target="#myModal1">

															Add New Admin

													</button>

                            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                                <div class="modal-dialog">

                                    <div class="modal-content">

                                        <div class="modal-header">

                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                                            <h4 class="modal-title" id="myModalLabel">Add the User name and Password</h4>

                                        </div>

										<form method="post">






<div class="modal-body">

<div class="form-group">

<label>Location</label>

<input name="newls"  class="form-control" placeholder="Enter Location">

</div>

</div>


<div class="modal-body">

<div class="form-group">

<label>NAME</label>

<input name="newin"  class="form-control" placeholder="Enter Name">

</div>

</div>






<div class="modal-body">

<div class="form-group">

<label>Add new User name</label>

<input name="newus"  class="form-control" placeholder="Enter User name">

</div>

</div>




										<div class="modal-body">

                                            <div class="form-group">

                                            <label>New Password</label>

                                            <input name="newps"  class="form-control" placeholder="Enter Password">

											</div>

                                        </div>

										

                                        <div class="modal-footer">

                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

											

                                           <input type="submit" name="in" value="Add" class="btn btn-primary">

										  </form>

										   

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

						

					<div class="panel-body">

                            

                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                                <div class="modal-dialog">

                                    <div class="modal-content">

                                        <div class="modal-header">

                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                                            <h4 class="modal-title" id="myModalLabel">Change the User name and Password</h4>

                                        </div>

										<form method="post">

                                        <div class="modal-body">

                                            <div class="form-group">

                                            <label>Change User name</label>

                                            <input name="usname" value="<?php echo $us; ?>" class="form-control" placeholder="Enter User name">

											</div>

										</div>

										<div class="modal-body">

                                            <div class="form-group">

                                            <label>Change Password</label>

                                            <input name="passwr" value="<?php echo $ps; ?>" class="form-control" placeholder="Enter Password">

											</div>

                                        </div>

										

                                        <div class="modal-footer">

                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

											

                                           <input type="submit" name="up" value="Update" class="btn btn-primary">

										  </form>

										   

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                </div>

            </div>

               

                <!-- /. ROW  -->

        
                  

            

			 <!-- /. PAGE INNER  -->

            </div>

         <!-- /. PAGE WRAPPER  -->

        </div>

   <?php  

 include( 'footer.php');



?>