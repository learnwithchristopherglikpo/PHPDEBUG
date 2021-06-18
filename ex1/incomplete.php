<?php
include 'init.php';

$page_title="Sign up for Twitter / Twitter"; 

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    

</head>
<body>
    <section class="login-page">
       <?php require_once 'backend/shared/loginHeader.php'; ?>
       <div class="login">
         <div class="login-content">
          <div class="header-container">
              <h2>Create your account</h2>
           </div>
           <form  class="login-form" id="formData" action="<?php echo h($_SERVER["PHP_SELF"]);?>" method="POST">
             <div class="form-group">
                  <label for="fname">First name</label>
                  <input type="text" placeholder="First name" name="firstName" value="" autocomplete="off" autofocus required>    
             </div>
             <div class="form-group">
                  <label for="lname">Last name</label>
                  <input type="text" placeholder="Last name" name="lastName" value="" autocomplete="off" required>
             </div>
             <div class="form-group">  
                  <label for="email">Email</label>
                  <input type="email" placeholder="Email" name="email" value="" autocomplete="off" required>
             </div>
             <div class="form-group">
            
                   <label for="password">Password</label>
                   <input type="password" placeholder="Password" name="new-password" autocomplete="off" required>
             </div>
             <div class="form-group">
                 <label for="cpassword">Confirm Password</label>
                 <input type="password" placeholder="Confirm Password" name="cpassword" autocomplete="off" required>
             </div>
             <div class="spacing">
               <button type="submit" class="login-form-btn" name="submitButton">Signup</button>
               <input type="checkbox" class="login-form-checkbox" id="check">
               <label for="check">Remember me</label>
               <a href="#">Forgot Password?</a>
             </div>
           </form>
         </div>
         <footer class="login-footer">
           <p>Already have  an account? <a href="">Login now</a></p>
         </footer>
       </div>
    </section>

  
</body>
</html>