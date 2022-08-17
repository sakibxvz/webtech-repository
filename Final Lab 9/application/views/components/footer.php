            <!-- JS Files  -->
            <?php linkJS("assets/js/jQuery.js") ?>
            <?php linkJS("assets/js/bootstrap.js") ?>
            <?php linkJS("assets/js/jquery.dataTables.min.js") ?>
            <?php linkJS("assets/js/jdataTables.bootstrap4.min.js") ?>
            <?php linkJS("assets/js/dataTables.responsive.min.js") ?>
            <?php linkJS("assets/js/responsive.bootstrap4.min.js") ?>

            <script>
                $(document).ready(function() {
                //Only needed for the filename of export files.
                //Normally set in the title tag of your page.
                document.title='Simple DataTable';
                // DataTable initialisation
                $('#example').DataTable(
                    {
                        "dom": '<"dt-buttons"Bf><"clear">lirtp',
                        "paging": true,
                        "autoWidth": true,
                        "buttons": [
                            'colvis',
                            'copyHtml5',
                    'csvHtml5',
                            'excelHtml5',
                    'pdfHtml5',
                            'print'
                        ]
                    }
                    );
                });
                
            </script>
        </div>
    </div>
    <div class="row">
        <div class="container mt-5"></div>
    </div>
</body>

</html>