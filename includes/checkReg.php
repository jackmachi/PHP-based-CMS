<?php



include_once('connect.php');

if (isset($_SESSION['logged_in'])) {
	
	?>
		
			<html>
			<head>
			<title>Search Users</title>
			<link href="../css/main.css" rel="stylesheet">
			</head>

			<body><?php
				<div class="container">
					
<!-- Form 1 -->
<form  action="username_search.php" method="POST">
<table align="center">

 <div class="form-group">
    <label for="exampleInputName"><h1>Username:</h1></label>
    <input type="text" class="form-control" id="uname"  name="username" placeholder="user1" width="50%" required>
	</div>
  
  <td><input type="submit" class="btn-primary" name="btnSearchName" value="Search username"></td>
   <tr>  
   
  
</table>
</form> <!--  End of Form 1 -->
  
  <!-- Form 2 -->
<form  action="name_search.php" method="POST">
<table align="center">

<div class="form-group">
    <label for="exampleInputName"><h1>Name:</h1></label>
    <input type="text" class="form-control" id="name"  name="name" placeholder="Bobby" width="50%" required>
	</div>
  
  <td><input type="submit" class="btn-primary" name="btnNameSearch" value="Search Name"></td>
   <tr>
</table>
</form> <!-- End of Form 2 -->

<!-- Form 3 -->
<form  action="location_search.php" method="POST">
<table align="center">

 <div class="form-group">
    <label for="exampleInputName"><h1>Location:</h1></label>
    <input type="text" class="form-control" id="location"  name="Location" placeholder="durban" width="50%" required>
</div>
  <td><input type="submit" class="btn-primary" name="btnSearchLocation" value="Search Location"></td>
   <tr>
</table>
</form> <!-- End of Form 3 -->
  
					
				</div>?>
			</body>

<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>


</html>	 } 

	
