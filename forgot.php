<?php
if (isset($_POST['send'])) {
    $toEmail = $_POST['email'];

  $headers = 'From: ghamalbip@gmail.com'. "\r\n" .
              "MIME-Version: 1.0" . "\r\n".
              "Content-type:text/html;charset=UTF-8" . "\r\n";

  //  "\r\n" .
      // 'Reply-To: ghamalbip@gmail.com' . "\r\n" .
      // 'X-Mailer: PHP/' . phpversion();

// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email

  if(mail($toEmail,'My subject', $msg, $headers)) {
    echo "congo";
  } else {
    echo "sorry";
  }
}
?>


<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pro Edu Consultancy</title>
  <link href="css/main.css" rel="stylesheet">
  
</head>
<body>
  <div id="wrapper">
  <header>
    <div class="logo"><img src="image/logo.jpg"></div>
    <h1>Pro Edu Consultancy</h1>
    
    <menu>
      <ul>
          <div class="menu-container" >
              <li><a href="index.php">Home</a></li>
              <li><a href="courses.html">Courses</a></li>
              <li><a href="contact.html">Contact Us</a></li>       
              
              <li><a href="login.php">Login</a></li>
              <li><a href="registration.php">Register</a></li>

          </div>
      </ul>

    </menu>
  </header>
  <main>
<div id="login" class="form-div">

<div class="container">
    <div class="row">
        <h1 class="text_green"></h1>
        <form name="login_form" id="login_form" action="" method="post">

           
                    <!-- <label for="email" > Email Address</label> -->

                    <input data-validate="email" name="email" type="email" id="email"
                           
                           placeholder=" Enter Email Address"
                           required>
              
           
                    <button name="send" type="submit" class="btn-login"> Send</button>
                    <!-- <p id="forgot_password" ><center><a href="#">Forgot password?</a></center></p> -->
               
        </form>
    </div>
</div>
</div>

</main>
    <footer>
        <h2>&copy; Pro Edu Consultancy</h2>
    </footer>
</div>
</body>
</html>