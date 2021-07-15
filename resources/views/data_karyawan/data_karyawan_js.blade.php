<script>
  var menu_active = document.getElementById('data-karyawan');
  menu_active.classList.add('active');
  $(function() {
    $('#tbl_all').DataTable();
    $('#tbl_penjualan').DataTable();
    $('#tbl_service').DataTable();
  })
</script>