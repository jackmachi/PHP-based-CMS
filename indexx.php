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
    <title>ADMIN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
   
    <link rel="stylesheet" href="css/bootstrap.min.css">
  
    
    
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
   
    <link rel="stylesheet" href="css/custom.css">
   
    <link rel="shortcut icon" href="img/favicon.ico">
	

   
  </head>
  <body>

    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <div class="sidenav-header-inner text-center">
            
			<a href="indexx.php">Welcome:</a><?php echo $_SESSION['user_name']; ?>
          </div>
          <div class="sidenav-header-logo"><a href="indexx.php" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
       
	

<a href="view_posts.php">View Posts</a>
<a href="view_blogs.php">View Blogs</a>
<a href="view_reviews.php">View Reviews</a>
<a href="zinsert_post.php">Insert New Post</a>
<a href="zinsert_blog.php">Insert New Blog</a>
<a href="zinsert_review.php">Insert New Review</a>
<a href="zinsert_indie.php">Insert New indie_blog</a>
<a href="view_comments.php">View Comments</a>
<br/><br/>
<a href="logout.php">Logout</a>
    
      </div>
    </nav>
    <div class="page home-page">

     <div class="container-fluid">

<h2 align=center> Here is the CMS, were you can manage content</h2>

<div>



<?php if(isset($_SESSION['user_name'])){ ?>
	
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
	
<?php } ?>


</div>
</div>


<!--?php 
	
	if(isset($_GET['insert'])){
	
	include("");
	
	}


?-->




<?php } ?>
</div> 

       
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
           
          </div>
        </div>
      </footer>
    </div>
   
   
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"> </script>
   
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