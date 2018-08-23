<?php 
session_start();

if(!isset($_SESSION['user_name'])){

header("location: login.php");
}
else {

?>


<html>
	<head>
		<title>inserting new reviews</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.green.css" id="theme-stylesheet">
	</head>
	
<body>

 <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <div class="sidenav-header-inner text-center">
            
			<a href="indexx.php">Welcome:</a><?php echo $_SESSION['user_name']; ?>
          </div>
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
       
	
<a href="logout.php">Logout</a>
<a href="view_posts.php">View Posts</a>
<a href="view_blogs.php">View Blogs</a>
<a href="view_reviews.php">View Reviews</a>
<a href="zinsert_post.php">Insert New Post</a>
<a href="zinsert_blog.php">Insert New Blog</a>
<a href="zinsert_review.php">Insert New Review</a>
<a href="view_comments.php">View Comments</a>
<br/><br/>
<a href="../index.php">&larr; Back</a>
    
      </div>
    </nav>
  <div class="page home-page">
<form method="post" action="zinsert_review.php" enctype="multipart/form-data">
	
	<table width="600" align="center" border="10">
		
		<tr>
			<td align="center" bgcolor="yellow" colspan="6"><h1>Insert New Reviews Here</h1></td>
		</tr>
		
		<tr>
			<td align="right">Review Title:</td>
			<td><input type="text" name="title" size="30"></td>
		</tr>
		
		<tr>
			<td align="right">Review Author:</td>
			<td><input type="text" name="author" size="30"></td>
		</tr>
		
		<tr>
			<td align="right">Review Keywords:</td>
			<td><input type="text" name="keywords" size="30"></td>
		</tr>
		
		<tr>
			<td align="right">Review Image:</td>
			<td><input type="file" name="image"></td>
		</tr>
		
		<tr>
			<td align="right">Review Content:</td>
			<td><textarea name="content" cols="30" rows="15"></textarea></td>
		</tr>
		
		<tr>
			<td align="center" colspan="6"><input type="submit" name="submit" value="Publish Now"></td>
		</tr>

	
	</table>
</form>
</div>
</body>
</html>
<?php 
include("includes/connect.php"); 

if(isset($_POST['submit'])){

	  $review_title = $_POST['title'];
	  $review_date = date('m-d-y');
	  $review_author = $_POST['author'];
	  $review_keywords = $_POST['keywords'];
	  $review_content =  nl2br($_POST['content']);
	  $review_image= $_FILES['image']['name'];
	  $image_tmp= $_FILES['image']['tmp_name'];
	
	if($review_title=='' or $review_author=='' or $review_keywords=='' or $review_content=='' or $review_image==''){
	
	echo "<script>alert('Any of the fields is empty')</script>";
	exit();
	}

	else {
	
	 $image_tmp= $_FILES['image']['tmp_name'];
	
	 move_uploaded_file($image_tmp,"../images/$review_image");
	
	  $insert_query = "insert into reviews (review_title,review_date,review_author,review_image,review_keywords,review_content) values ('$review_title','$review_date','$review_author','$review_image','$review_keywords','$review_content')";
	
	if(mysql_query($insert_query)){
	
	echo "<script>alert('review published successfuly')</script>";
	echo "<script>window.open('view_reviews.php','_self')</script>";
	
	}


}


}

?>

<?php } ?>