
<?php
include 'sidebar.php';
?>

<div id="page-wrapper" >              
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                        APOINMENT DETAILS<small> </small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
				 
				 
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <h3> <b>BY ADMIN DATA</b> </h3>    
                                <br><br>
                                <thead>
                                        <tr>
                                            
                                            <th>ID</th>
                                            <th>Name</th>
                                           
                                            <th>Phone</th>
                                            <th>Gender</th>
                                            <th>Age Group</th>
                                            <th>Category</th>
                                            <th>Date</th>
                                            <th>Delete</th> 
                                           
									       
                                             </tr>
                                    </thead>
                                    <tbody>
                                        
                                    <?php
                                    
                                    include ('db.php');
                                    $fetch_query = "SELECT appoinment.id ,appoinment.fname,appoinment.phone,appoinment.gender,appoinment.agegroup,appoinment.category,appoinment.date FROM appoinment WHERE appoinment.place = 'JABALPUR' && appoinment.caseby = 'BY ADMIN'";
                                    $result = $con->query($fetch_query);
                                    while($row = $result->fetch_assoc()){
                                        $id = $row['id'];
                                                                               
                                        if($id % 2 ==1 )
                                        {
                                            echo"<tr class='gradeC'>
                                            <td> ".$row['id']." </td>
                                            <td> ".$row['fname']." </td>
                                            <td> ".$row['phone']." </td>
                                            <td> ".$row['gender']." </td>
                                            <td> ".$row['agegroup']." </td>
                                            <td> ".$row['category']." </td>
                                            <td> ".$row['date']." </td>
                                            <td><a href=abidsdeleterecord.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	    
                                            </tr>";
                                                }
                                        else
                                        {
                                            echo"<tr class='gradeC'>
                                            <td> ".$row['id']." </td>
                                            <td> ".$row['fname']." </td>
                                            <td> ".$row['phone']." </td>
                                            <td> ".$row['gender']." </td>
                                            <td> ".$row['agegroup']." </td>
                                            <td> ".$row['category']." </td>
                                            <td> ".$row['date']." </td>
                                            <td><a href=abidsdeleterecord.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	    
                                            </tr>";
                                        }
                                    
                                    }
                                    
                                                                            
                                                                        ?>
                                                                               
                                                                  
                                     			
                                    </tbody>
                                </table>





                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <h3> <b>BY USER DATA</b> </h3>    
                                <br><br>
                                <thead>
                                        <tr>
                                            
                                            <th>ID</th>
                                            <th>Name</th>
                                           
                                            <th>Phone</th>
                                            <th>Gender</th>
                                            <th>Age Group</th>
                                            <th>Category</th>
                                            <th>Date</th>
                                            <th>Delete</th> 
                                           
									       
                                             </tr>
                                    </thead>
                                    <tbody>
                                        
                                    <?php
                                    
                                    include ('db.php');
                                    $fetch_query = "SELECT appoinment.id ,appoinment.fname,appoinment.phone,appoinment.gender,appoinment.agegroup,appoinment.category,appoinment.date FROM appoinment WHERE  appoinment.place = 'JABALPUR' &&  appoinment.caseby = 'BY USER'";
                                    $result = $con->query($fetch_query);
                                    while($row = $result->fetch_assoc()){
                                        $id = $row['id'];
                                                                               
                                        if($id % 2 ==1 )
                                        {
                                            echo"<tr class='gradeC'>
                                            <td> ".$row['id']." </td>
                                            <td> ".$row['fname']." </td>
                                            <td> ".$row['phone']." </td>
                                            <td> ".$row['gender']." </td>
                                            <td> ".$row['agegroup']." </td>
                                            <td> ".$row['category']." </td>
                                            <td> ".$row['date']." </td>
                                            <td><a href=abidsdeleterecord.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	    
                                            </tr>";
                                                }
                                        else
                                        {
                                            echo"<tr class='gradeC'>
                                            <td> ".$row['id']." </td>
                                            <td> ".$row['fname']." </td>
                                            <td> ".$row['phone']." </td>
                                            <td> ".$row['gender']." </td>
                                            <td> ".$row['agegroup']." </td>
                                            <td> ".$row['category']." </td>
                                            <td> ".$row['date']." </td>
                                            <td><a href=abidsdeleterecord.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	    
                                            </tr>";
                                        }
                                    
                                    }
                                    
                                                                            
                                                                        ?>
                                                                               
                                                                  
                                     			
                                    </tbody>
                                </table>




                                <br><br>
         <button style="border: 2px solid black; background-color: #999; width: 80px; padding-bottom: 20px; height: 25px;  border-radius: 20px; margin-left: 500px; " onclick = "myfun()">Print</button>
         <Script >
            function myfun(){
                window.print();
            }
         </Script>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
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
