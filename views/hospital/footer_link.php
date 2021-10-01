<script src="<?php echo base_url('Assets/hospital/js/vendor.js'); ?>"></script>
<script src="<?php echo base_url('Assets/hospital/js/app.min.js'); ?>"></script>

<!-- page plugins js -->
<script src="<?php echo base_url('Assets/hospital/vendors/bower-jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
<script src="<?php echo base_url('Assets/hospital/js/maps/jquery-jvectormap-us-aea.js'); ?>"></script>
<script src="<?php echo base_url('Assets/hospital/vendors/d3/d3.min.js'); ?>"></script>
<script src="<?php echo base_url('Assets/hospital/vendors/nvd3/build/nv.d3.min.js'); ?>"></script>


<script src="<?php echo base_url('Assets/hospital/vendors/nvd3/build/nv.d3.min.js'); ?>"></script>
<script src="<?php echo base_url('Assets/hospital/vendors/jquery.sparkline/index.js'); ?>"></script>

<script src="<?php echo base_url('Assets/hospital/vendors/chart.js/dist/Chart.min.js'); ?>"></script>

<!--<script src="--><?php //echo base_url('Assets/hospital/js/app.min.js'); ?><!--"></script>-->
<script src="<?php echo base_url('Assets/hospital/vendors/bootstrap-timepicker/js/bootstrap-timepicker.js'); ?>"></script>
<script src="<?php echo base_url('Assets/hospital/vendors/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
<script src="<?php echo base_url('Assets/hospital/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.js'); ?>"></script>
<script src="<?php echo base_url('Assets/hospital/js/dashboard/dashboard.js'); ?>"></script>
<script src="<?php echo base_url('Assets/hospital/vendors/selectize/dist/js/standalone/selectize.min.js'); ?>"></script>
<script src="<?php echo base_url('Assets/hospital/vendors/summernote/dist/summernote.min.js'); ?>"></script>
<script src="<?php echo base_url('Assets/hospital/js/forms/form-elements.js'); ?>"></script>

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.6/js/dataTables.rowReorder.min.js"></script>


<script>
    $(document).ready(function () {
        setInterval(function () {
            $.ajax({
                url: "<?= base_url('getMsgMerchant') ?>",
                type: "POST",
                success: function (resp) {
                    $('.show_msg').html(resp);
                }
            });
        }, 3000);
    });
</script>