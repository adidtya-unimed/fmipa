<?php
defined('FMIPA_APP') or exit('Forbidden...!');
?>

<footer class="content-footer">
  <div>

  </div>
  <div>
    <a href="#" target="_blank">FMIPA UNIMED </a> © 2025 - v<?= $config['VERSI']; ?>
  </div>
</footer>

<!-- JQuery -->
<script src="assets/webapp/libs/jquery-3.7.1.min.js"></script>

<!-- Nicescroll -->
<script src="assets/webapp/libs/nicescroll.js"></script>

<!-- Apex chart -->
<script src="assets/webapp/libs/charts/apex/apexcharts.min.js"></script>

<!-- Slick -->
<script src="assets/webapp/libs/slick/slick.min.js"></script>

<!-- Examples -->
<script src="assets/webapp/js/examples/dashboard.js"></script>

<script src="assets/webapp/extensions/sweetalert2/sweetalert2.min.js"></script>
<script src="assets/webapp/js/examples/sweet-alert.js"></script>

<!-- Datatables -->
<script src="assets/webapp/extensions/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/webapp/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/webapp/js/examples/datatable.js"></script>

<script src="assets/webapp/libs/select2/js/select2.min.js"></script>

<!-- Main Javascript file -->
<script src="assets/webapp/js/app.js"></script>

<?php if (isset($_SESSION['sukses'])) { ?>
  <script>
    Swal.fire(
      'Congratulation',
      '<?= $_SESSION['sukses']; ?>',
      'success'
    )
  </script>
  <?php unset($_SESSION['sukses']); ?>
<?php } elseif (isset($_SESSION['gagal'])) { ?>
  <script>
    Swal.fire(
      'Error',
      '<?= $_SESSION['gagal']; ?>',
      'error'
    )
  </script>
  <?php unset($_SESSION['gagal']); ?>
<?php } ?>


<script>
  function confirmDelete(event, element) {
    event.preventDefault();
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'Cancel'
    }).then((result) => {
      if (result.isConfirmed) {
        // If confirmed, navigate to the delete URL
        window.location.href = element.href;
      }
    })
  }
</script>

<script>
  $('.select2-example').select2({
    placeholder: 'Select'
  });
</script>
</body>

</html>