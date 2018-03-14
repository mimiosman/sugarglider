<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>
<?php

//including the database connection file
include("../../include/connection.php");

if(isset($_POST['bulk_delete_submit'])){
    $idArr = $_POST['checked_id'];
    foreach($idArr as $id){
    $result=mysqli_query($mysqli, "DELETE FROM link WHERE id=$id");
    }

    header("Location:list_penyakit.php");
}
