</div>
    <!-- end container -->

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

   
      <!-- sweet alert -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
      
</script> -->
<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- jQuery UI -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script type="text/javascript">
    $(document).ready(function()
    {
        $('#no_ktp').autocomplete(
            {
                source: function(request,response)
                {
                    $.ajax(
                        {
                            url: 'proses_autocomplete.php',
                            type: 'post',
                            dataType: 'json',
                            data:
                            {
                                search: request.term
                            },
                            success: function(data)
                            {
                                response(data);
                            }
                        });
                },
                select: function(event,ui)
                {
                    $('#no_ktp').val(ui.item.value); //menampilkan seleksi No_Ktp
                    return false;
                }
            });
    });


</script>

<script type="text/javascript"> 

    function checkout(No_Ktp)
    {
        $(document).ready(function()
        {
            $.ajax(
            {
                type: 'post',
                url: 'checkout.php',
                data: 
                {
                    checkout:No_Ktp,
                    action: "update"
                },
                success:function(data)
                {}

            });
        });
        
    }

</script>

</body>
 <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>


</html>