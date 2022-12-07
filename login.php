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

      
    <?php
            
      if(isset($_POST["submit"])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
      
      
    require 'config.php';

      $sql = "SELECT * FROM users";

        $query =  mysqli_query($conn , $sql ) 
        or die("Failed to query database".mysql_error());



        if (mysqli_num_rows($query) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($query)) {
            
              if ($row['username'] == $username) {
              
                header('Location: index.php');
                exit;

              }            
            }

              echo "<h3 style='font-weight: bold; color: red; text-align: center;'>Invalid User Found!</h3>"; 
        } else {
            
              echo "";
        }

        mysqli_close($conn);    
      
        }
      
    ?>


    <h1>-- Login Form --</h1>
<div class="container">
    <div class="row">
        <h1 class="text_green"></h1>
        <form name="login_form" id="login_form" action="" method="post">

           
                    <label for="username" > Username </label>

                    <input data-validate="username" name="username" type="username" id="username"
                           
                           placeholder="Username"
                           required>
               
           
                    <label for="password" > Password </label>

                    <input name="password" type="password"  id="password"
                           placeholder="Password" required>
               
           
                    <button name="submit" type="submit" class="btn-login"> Login</button>
                    <p id="forgot_password" ><center><a href="forgot.php">Forgot password?</a></center></p>
               
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