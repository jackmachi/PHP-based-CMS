<html>
	<head>
		<title>Admin Panel</title>
	
	<link rel="stylesheet" href="_style.css" />
	<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/carousel.css" rel="stylesheet">
	</head>
	
<body>
<div id="header">
<a href="index.php">
<h1>Welcome to the Admin Panel</h1></a>

</div> 

<div id="sidebar">

<h2><a href="#">Logout</a></h2>
<h2><a href="view_posts.php">View Posts</a></h2>
<h2><a href="#">Inser New Post</a></h2>
<h2><a href="#">View Comments</a></h2>


</div>
<?php 

include("includes/connect.php");

if(isset($_GET['edit'])){
	
	$edit_id = $_GET['edit'];
	
	$edit_query = "select * from blogs where blog_id='$edit_id'";
	
	$run_edit = mysql_query($edit_query); 
	
	while ($edit_row=mysql_fetch_array($run_edit)){
	
	
		$blog_id = $edit_row['blog_id'];
		$blog_title = $edit_row['blog_title'];
		$blog_author = $edit_row['blog_author'];
		$blog_keywotds = $edit_row['blog_keywotds'];
		$blog_image = $edit_row['blog_image'];
		$blog_content = $edit_row['blog_content'];
	}
}
?>

<form method="post" action="edit_blogs.php?edit_form=<?php echo $edit_id; ?>" enctype="multipart/form-data">
	
	<table width="600" bgcolor="orange" align="center" border="10">
		
		<tr>
			<td align="center" bgcolor="yellow" colspan="6"><h1>Edit The blog Here</h1></td>
		</tr>
		
		<tr>
			<td align="right">blog Title:</td>
			<td><input type="text" name="title" size="30" value="<?php echo $blog_title; ?>"></td>
		</tr>
		
		<tr>
			<td align="right">blog Author:</td>
			<td><input type="text" name="author" size="30"value="<?php echo $blog_author; ?>"></td>
		</tr>
		
		<tr>
			<td align="right">blog Keywords:</td>
			<td><input type="text" name="keywords" size="30"value="<?php echo $blog_keywotds; ?>"></td>
		</tr>
		
		<tr>
			<td align="right">blog Image:</td>
			<td>
			<input type="file" name="image"> 
			<img src="../images/<?php echo $blog_image;?>" width="100" height="100"></td>
		</tr>
		
		<tr>
			<td align="right">blog Content:</td>
			<td><textarea name="content" cols="30" rows="15"><?php echo $blog_content; ?></textarea></td>
		</tr>
		
		<tr>
			<td align="center" colspan="6"><input type="submit" name="update" value="Update Now"></td>
		</tr>		
	</table>

</form>
</body>
</html>
<?php
	
	if(isset($_POST['update'])){
	
	$update_id = $_GET['edit_form'];
	$blog_title1 = $_POST['title'];
	 $blog_content1 = $_POST['content'];
	  $blog_date1 = date('m-d-y');
	  $blog_keywotds1 = $_POST['keywords'];
	   $blog_image1= $_FILES['image']['name'];
	  $image_tmp= $_FILES['image']['tmp_name'];
	  $blog_author1 = $_POST['author'];
	  
	  
	 
	 
	
	if($blog_title1=='' or $blog_author1=='' or $blog_keywotds1=='' or $blog_content1=='' or $blog_image1==''){
	
	echo "<script>alert('Any of the fields is empty')</script>";
	exit();
	}

	else {
	
	 move_uploaded_file($image_tmp,"../images/$blog_image1");
		
		$update_query = "update blogs set blog_title='$blog_title1',blog_content='$blog_content1',blog_date='$blog_date1',blog_keywotds='$blog_keywotds1',blog_image='$blog_image1',post_author='$blog_author1', where blog_id='$update_id'";
		
		if(mysql_query($update_query)){
		
		echo "<script>alert('blog has been updated')</script>";
		
		echo "<script>window.open('view_blogs.php','_self')</script>";
		
		}
	
	}
	}



?>