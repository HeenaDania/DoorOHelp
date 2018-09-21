<?php 
	include '../../config.php';
	$delete = "delete from professionals where id = '$_GET[id]'";
	mysqli_query($con,$delete);
	header("location:../main.php?pg=listProfessionals&d=501");
 ?>