<?php 
	include '../../config.php';
	$delete = "delete from testimonials where id = '$_GET[id]'";
	mysqli_query($con,$delete);
	header("location:../main.php?pg=listTestimonials&d=501");
 ?>