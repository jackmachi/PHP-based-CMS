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
    <title>VIEW REVIEWS</title>
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
		<td colspan="10" align="center" ><h1>View All Reviews</h1></td>
	</tr>
	
	<tr>
		<th>Review No</th><br/>
		<th>Review Date</th>
		<th>Review Author</th>
		<th>Review Title:</th>
		<th>Review Post Image</th>
		<th>Review Content</th>
		<th>Delete Review</th>
		<th></th>
	</tr>
<?php 
include("includes/connect.php");

$query = "select * from reviews order by 1 DESC"; 

$run = mysql_query($query);

while($row=mysql_fetch_array($run)){

	
	$review_id = $row['review_id']; 
	$review_title = $row['review_title'];
	$review_date = $row['review_date'];
	$review_author = $row['review_author'];
	$review_image = $row['review_image'];
	$review_content = substr($row['review_content'],0,100);

?>
<tr align="center">
		<td><?php echo $review_id; ?></td>
		<td><?php echo $review_date; ?></td>
		<td><?php echo $review_author; ?></td>
		<td><?php echo $review_title; ?></td>
		<td><img src="../images/<?php echo $review_image; ?>" width="100" height="100"></td>
		<td><?php echo $review_content; ?></td>
		<td><a href="delete_reviews.php?del=<?php echo $review_id; ?>">Delete</a></td>
		<td><!--a href="edit_reviews.php?edit=<?php echo $review_id; ?>"--></a></td>
	</tr>
<?php } ?>

</div>
<?php 
	
	if(isset($_GET['insert'])){
	
	include("zinsert_review.php");
	
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
        </div>
      </footer>
    </div>
    <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"> </script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="js/charts-home.js"></script>
    <script src="js/front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
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