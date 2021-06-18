<?php
$page_title="Twitter.It's what's happening / Twitter";
$startYear = 2019;
$thisYear = date('Y');
if ($thisYear > $startYear) {
	$thisYear = date('Y');
	$dates = "$startYear&ndash;$thisYear";
} else {
	$dates = $startYear;
}
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <title><?php echo $page_title; ?></title>
    <link
      href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css">


</head>
<body>
    <!-- main page -->
    <section class="main-page">
         <!-- left -->
         <div class="left">
             <div class="left-content">
                 <div>
                     <i class="fa fa-search"></i>
                     <h3 class="left-content-heading">Find your interests</h3>
                 </div>
                 <div>
                    <i class="fa fa-user"></i>
                    <h3 class="left-content-heading">Explore what people are talking about</h3>
                </div>
                <div>
                    <i class="fa fa-comment"></i>
                    <h3 class="left-content-heading">Join the people</h3>
                </div>
             </div>
         </div>
         <!-- end of left page -->
         <!-- right -->
         <div class="right">
             <div class="middle-content">
                 <i class="fa fa-twitter"></i>
                 <h1>See what’s happening in the world right now</h1>
                 <h4>Join Twirrer today</h4>
                 <a href="" class="sign-up btn">Sign Up</a>
                 <a href="" class="log-in btn">Log in</a>
             </div>
         </div>
         <!-- end of right -->
         <!-- Footer -->
         <footer class="main-page-footer" role="contentinfo">
                <ul aria-label="Footer">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Cookie Policy</a></li>
                    <li><a href="#">Ads info</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Status</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Brand Resources</a></li>
                    <li><a href="#">Advertising</a></li>
                    <li><a href="#">Marketing</a></li>
                    <li><a href="#">Advertising</a></li>
                    <li><a href="#">Twitter for Business</a></li>
                    <li><a href="#">Developers</a></li>
                    <li><a href="#">Directory</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#"><small><?php echo $dates; ?> Twitter,Inc</small></a></li>
                </ul>  
         </footer>
         <!-- End of Footer -->
    </section>
    <!-- end of main page -->
        