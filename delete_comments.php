<?php 
include("includes/connect.php"); 

if(isset($_GET['del'])){

	$delete_id = $_GET['del'];
	
	$delete_query = "delete from comments where comment_id='$delete_id' ";
	
	if(mysql_query($delete_query)){
	
	echo "<script>alert('commentt Has been Deleted')</script>";
	echo "<script>window.open('view_comments.php','_self')</script>";
	
	}
	



}




?>