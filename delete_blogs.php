<?php 
include("includes/connect.php"); 

if(isset($_GET['del'])){

	$delete_id = $_GET['del'];
	
	$delete_query = "delete from blogs where blog_id='$delete_id' ";
	
	if(mysql_query($delete_query)){
	
	echo "<script>alert('Blog Has been Deleted')</script>";
	echo "<script>window.open('view_blogs.php','_self')</script>";
	
	}
	



}




?>