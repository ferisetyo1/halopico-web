<script src="<?=base_url('public/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?=base_url('public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?=base_url('public/plugins/datatables-responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?=base_url('public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')?>"></script>
<script type="text/javascript">
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
    });
</script>
