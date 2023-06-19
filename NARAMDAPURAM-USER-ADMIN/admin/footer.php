 

    <script src="assets/js/jquery-1.10.2.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.metisMenu.js"></script>

<script src="assets/js/dataTables/jquery.dataTables.js"></script>

<script src="assets/js/dataTables/dataTables.bootstrap.js"></script>

    <script>

        $(document).ready(function () {

            $('#dataTables-example').dataTable();

        });

</script>

     <!-- Custom Js -->

<script src="assets/js/custom-scripts.js"></script>



<script>



$(".output_date").on("click",() => {

   var input_val = $(".input_date").val();

   var output_date = document.getElementsByClassName("output_date")[0];

   output_date.min = input_val;

})



</script>  

</body>

</html>



