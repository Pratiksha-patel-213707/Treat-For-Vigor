
<?php
include 'sidebar.php';
?>

<div id="page-wrapper" >              
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                        JABALPUR-USER-ADMIN HOSPITAL HOME PAGE<small> </small>
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
    <div class="col-lg-3">
<center>
    <img src="../img/amit-r-c.png" alt="" style="width: 70%; height: 50%;">
    </center>
    <br>
<br>
    
    <?php
                        include 'db.php';

                        $query = "SELECT * FROM `kataradata`;";
  
  // FETCHING DATA FROM DATABASE
  $result = $con->query($query);
  $total_row = $result->fetch_assoc();

  ?>

<center>
                           <h4 class="page-header2"><b> NAME  = </b>  <?php echo $total_row['name'];?></h4>
                           <h4 class="page-header2"><b> POST  = </b>  <?php echo $total_row['post'];?></h4>
                           <br>
                           </center>
    </div>

<div class="col-lg-9">
    <center>
        <br>
        <h2><b>ABOUT</b></h2>
        <br>
        <p style="margin-left: 20px; margin-right: 20px;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam quos itaque perferendis. Illo vero debitis voluptatum at animi doloribus sequi minus sunt numquam necessitatibus, beatae ipsa quis, atque cupiditate tempora? Voluptates deserunt dolores qui, enim ipsa laboriosam? Laudantium, id unde a fuga officiis nemo voluptas modi incidunt rerum cupiditate illum laboriosam enim veritatis reprehenderit distinctio delectus soluta! Nisi perspiciatis porro impedit? Nobis voluptatum voluptatibus voluptas, sapiente voluptates esse commodi incidunt?</p>
    </center>
</div>

</div>
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

