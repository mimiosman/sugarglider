<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
//including the database connection file
include("../include/connection.php");

//getting id of the data from url
$id = $_GET['id'];

//selecting data associated with this particular id
$query = "SELECT * FROM `penjagaan` WHERE id=$id";
$result = mysqli_query($mysqli, $query);

while($res = mysqli_fetch_array($result))
{
  $image = $res['Image'];
}

unlink("../static/img/jaga/".$image);

//deleting the row from table
$result=mysqli_query($mysqli, "DELETE FROM penjagaan WHERE id=$id");

//redirecting to the display page (view.php in our case)
header("Location:list_jaga.php");
?>
