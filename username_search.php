<?php

session_start();

include_once('../includes/connection.php');
include_once ('../includes/DBH.php');
?>

<?php
$uname = $_POST['username'];

if (isset($_SESSION['user_name'])) {
	$sql= "SELECT * FROM members WHERE username='$uname';";
	$results=mysqli_query($conn,$sql);
	$resultCheck=mysqli_num_rows($results);
	if($resultCheck>0){
		$numberof=$resultCheck;
		if($numberof>1){
			echo "there are ".$numberof." people with  ".$uname." username In the Database "."<br>"."<br>";
		}else{
		echo "there is ".$numberof." person with username ".$uname." In the Database"."<br>";}
		echo "<strong>name</strong> "."|". " <strong>username</strong>"."|". " <strong>userID</strong>"."<br>";
		while($row=mysqli_fetch_assoc($results)){
			
			echo $row['name']." = <strong>". $row['username']." </strong> : ".$row['ID']."<br>";
		}
	}
	
}else{
	echo "<strong>name</strong>" ."<br>";
	
}
	?>

</html>