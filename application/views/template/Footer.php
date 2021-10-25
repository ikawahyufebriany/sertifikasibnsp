<!-- /.content-wrapper -->
<footer class="main-footer">
 
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url("assets/plugins/jquery/jquery.min.js") ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url("assets/plugins/jquery-ui/jquery-ui.min.js") ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- DataTables  & Plugins -->
<script src="<?= base_url("assets/plugins/datatables/jquery.dataTables.min.js") ?>"></script>
<script src="<?= base_url("assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js") ?>"></script>
<script src="<?= base_url("assets/plugins/datatables-responsive/js/dataTables.responsive.min.js") ?>"></script>
<script src="<?= base_url("assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js") ?>"></script>
<script src="<?= base_url("assets/plugins/datatables-buttons/js/dataTables.buttons.min.js") ?>"></script>
<script src="<?= base_url("assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js") ?>"></script>
<script src="<?= base_url("assets/plugins/datatables-buttons/js/buttons.html5.min.js") ?>"></script>
<script src="<?= base_url("assets/plugins/datatables-buttons/js/buttons.print.min.js") ?>"></script>
<script src="<?= base_url("assets/plugins/datatables-buttons/js/buttons.colVis.min.js") ?>"></script>

<!-- Sweetalert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>


<script>
  $.widget.bridge('uibutton', $.ui.button)
  $('#arsipTable').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
  });

  function confirmHapus(id) {
    Swal.fire({
      icon: 'warning',
      title: 'Konfirmasi',
      text: 'Yakin untuk menghapus data ini?',
      showCancelButton: true,
      confirmButtonText: 'Hapus',

    }).then(result => {
      if (result.isConfirmed) {
        $.ajax({
          url: '<?= base_url("menu/delete/") ?>' + id,
          type: 'DELETE',
          error: function(err) {
            Swal.fire({
              icon: 'danger',
              title: 'Gagal',
              text: 'Data gagal dihapus'
            })
          },
          success: function(data) {
            $("#" + id).remove();
            Swal.fire({
              icon: 'success',
              title: 'Dihapus',
              text: 'Data berhasil dihapus'
            })
          }
        });
      } else {
        Swal.fire({
          icon: 'info',
          title: 'Dibatalkan',
          text: 'Data batal dihapus'
        })
      }
    })
  }

</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url("assets/plugins/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
<!-- ChartJS -->
<script src="<?= base_url("assets/plugins/chart.js/Chart.min.js") ?>"></script>
<!-- Sparkline -->
<script src="<?= base_url("assets/plugins/sparklines/sparkline.js") ?>"></script>
<!-- JQVMap -->
<script src="<?= base_url("assets/plugins/jqvmap/jquery.vmap.min.js") ?>"></script>
<script src="<?= base_url("assets/plugins/jqvmap/maps/jquery.vmap.usa.js") ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url("assets/plugins/jquery-knob/jquery.knob.min.js") ?>"></script>
<!-- daterangepicker -->
<script src="<?= base_url("assets/plugins/moment/moment.min.js") ?>"></script>
<script src="<?= base_url("assets/plugins/daterangepicker/daterangepicker.js") ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url("assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js") ?>"></script>
<!-- Summernote -->
<script src="<?= base_url("assets/plugins/summernote/summernote-bs4.min.js") ?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url("assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js") ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url("assets/dist/js/adminlte.js") ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url("assets/dist/js/demo.js") ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url("assets/dist/js/pages/dashboard.js") ?>"></script>
</body>

</html>