<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
//including the database connection file
include("../../include/connection.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result=mysqli_query($mysqli, "DELETE FROM penyakit WHERE id=$id"); // delete dari database

//deleting the row from table
$result=mysqli_query($mysqli, "DELETE FROM link WHERE id_penyakit=$id"); // lepas delete, pergi balik pada senarai penyakit

//redirecting to the display page (view.php in our case)
header("Location:list_penyakit.php");
?>
