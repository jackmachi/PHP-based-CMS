<?php 
session_start();

if(!isset($_SESSION['user_name'])){

header("location: login.php");
}
else {

?>


<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VIEW POSTS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google fonts - Roboto -->
    
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.green.css" id="theme-stylesheet">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">

    <link rel="shortcut icon" href="img/favicon.ico">
	

   
  </head>
  <body>
    <!-- Side Navbar -->
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
<a href="zinsert_review.php">Insert New Reviewt</a>
<a href="view_comments.php">View Comments</a>
<br/><br/>
<a href="../index.php">&larr; Back</a>
    
      </div>
    </nav>
    <div class="page home-page">
      <!-- navbar-->
     <div class="container-fluid">
	 <table width="1000">
<tr>
		<td colspan="10" align="center" ><h1>View All Posts</h1></td>
	</tr>
	
	<tr>
		<th>Post No</th><br/>
		<th>Post Date</th>
		<th>Post Author</th>
		<th>Post Title:</th>
		<th>Post Post Image</th>
		<th>Post Content</th>
		<th>Delete Post</th>
		<th></th>
	</tr>
<?php 
include("includes/connect.php");

$query = "select * from posts order by 1 DESC"; 

$run = mysql_query($query);

while($row=mysql_fetch_array($run)){

	$post_id = $row['post_id'];
	$post_date = $row['post_date'];
	$post_author = $row['post_author'];
	$post_title = $row['post_title'];
	$post_image = $row['post_image'];
	$post_content= substr($row['post_content'],0,50);
?>
<tr align="center">
		<td><?php echo $post_id; ?></td>
		<td><?php echo $post_date; ?></td>
		<td><?php echo $post_author; ?></td>
		<td><?php echo $post_title; ?></td>
		<td><img src="../images/<?php echo $post_image; ?>" width="100" height="100"></td>
		<td><?php echo $post_content; ?></td>
		<td><a href="delete.php?del=<?php echo $post_id; ?>">Delete</a></td>
		<td><!--a href="edit_posts.php?edit=<?php echo $post_id; ?>"--></a></td>
	</tr>
<?php } ?>

</div>
<?php 
	
	if(isset($_GET['insert'])){
	
	include("insert_post.php");
	
	}


?>
</table>
</body>
</html>

<?php } ?>
</div> 

       
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
            
            </div>
            <div class="col-sm-6 text-right">
             
          </div>
        </div>
      </footer>
    </div>
   
  
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"> </script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    
    <script src="js/charts-home.js"></script>
    <script src="js/front.js"></script>
   
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>