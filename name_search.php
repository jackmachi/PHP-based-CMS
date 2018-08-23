<?php

session_start();

include_once('../includes/connection.php');
include_once ('../includes/DBH.php');

$nm = $_POST['name'];

if (isset($_SESSION['user_name'])) {
	$sql= "SELECT * FROM members WHERE name='$nm';";
	$results=mysqli_query($conn,$sql);
	$resultCheck=mysqli_num_rows($results);
	if($resultCheck>0){
		$numberof=$resultCheck;
		if($numberof>1){
			echo "there are ".$numberof." people named ".$nm." In the Database"."<br>"."<br>";
		}else{
		echo "there is ".$numberof." person named ".$nm." In the Database"."<br>";}
		echo "<strong>name</strong> "."|". " <strong>username</strong>"."|". " <strong>userID</strong>"."<br>";
		while($row=mysqli_fetch_assoc($results)){
			
			echo "<strong>".$row['name']."</strong> = ". $row['username']."  : ".$row['ID']."<br>";
		}
	}
	
}?>