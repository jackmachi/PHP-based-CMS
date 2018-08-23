<?php

session_start();

include_once('../includes/connection.php');
include_once ('../includes/DBH.php');

$loc = $_POST['Location'];

if (isset($_SESSION['user_name'])) {
	$sql= "SELECT * FROM members WHERE location='$loc';";
	$results=mysqli_query($conn,$sql);
	$resultCheck=mysqli_num_rows($results);
	if($resultCheck>0){
		$numberof=$resultCheck;
		if($numberof>1){
			echo "there are ".$numberof." people living in ".$loc." In the Database"."<br>"."<br>";
		}else{
		echo "there is ".$numberof." person living in  ".$loc." In the Database"."<br>";}
		echo "<strong>name</strong> "."|". " <strong>username</strong>"."|". " <strong>userID</strong>"."|". " <strong>Location</strong>"."<br>";
		while($row=mysqli_fetch_assoc($results)){
			
			echo $row['name']." = ". $row['username']."  : ".$row['ID']."  : <strong>".$row['location']."</strong><br>";
		}
	}
	
}?>