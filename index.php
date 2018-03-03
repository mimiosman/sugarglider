<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('include/header.php'); ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include_once('include/navbar.php'); ?>
  <!-- Navigation-->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
    </div>
		<?php echo $_SESSION['valid']; ?>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <!-- footer -->
    <?php include_once('include/footer.php'); ?>
    <!-- /.footer -->
  </div>
</body>

</html>
