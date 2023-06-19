
<?php
include 'sidebar.php';
?>
<?php
include 'db.php'
?>
<div id="page-wrapper" >              
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                        STATUS OF GADARWARA HOSPITAL<small> </small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
				 

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                       <div class="row">

                   <div class="col-lg-12">
                    <div class="col-lg-1"></div>
                        <div class="col-lg-3"><img src="img/amit-r-c.png" alt="" style="width: 70%; height: 50%;"></div>
                       <div class="col-lg-1"></div>
                        <div class="col-lg-6">

                        <?php
                        include 'db.php';

                        $query = "SELECT * FROM `kataradata`;";
  
  // FETCHING DATA FROM DATABASE
  $result = $con->query($query);
  $total_row = $result->fetch_assoc();

  ?>


                           <h1 class="page-header" style="font-size: 1.6rem;">Name  =   <?php echo $total_row['name'];?></h1>
                            <h1 class="page-header" style="font-size: 1.6rem;">User Name = <?php echo $total_row['usname']?></h1>
                            <h1 class="page-header" style="font-size: 1.6rem;">Password = <?php echo $total_row['passw']?></h1>
                        </div>
                 
                   </div>
                       
                       </div>  
                       
                       <center>
                        <br><br>    
        <a href="../../GADARWARA-USER-ADMIN/admin/index.php">
        <img src="img/2-r.png" alt="" style="width: 15%; ">
        </a>
        <br>
        <center>
            <b>
            <h3 style="color: #576CBC; font-size: 2rem"><b>  ADMIN LOGIN</b></h3>
            </b>
        </center>
    </center>
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
