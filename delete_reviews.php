<?php 
include("includes/connect.php"); 

if(isset($_GET['del'])){

	$delete_id = $_GET['del'];
	
	$delete_query = "delete from reviews where review_id='$delete_id' ";
	
	if(mysql_query($delete_query)){
	
	echo "<script>alert('Review Has been Deleted')</script>";
	echo "<script>window.open('view_reviews.php','_self')</script>";
	
	}
	



}




?>