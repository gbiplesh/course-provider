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
<div id="register" class="form-div">
  <h1>-- Registration Form --</h1>
<div class="container">
    
    <?php
        require 'config.php';
                        
            if(isset($_POST["submit"])) {
            
              $fullname = $_POST['fullname'];
              $address = $_POST['address'];
              $contact = $_POST['contact'];
              $email = $_POST['email'];
              $username = $_POST['username'];
              $password = $_POST['password'];
              
              
            $add = mysqli_query($conn, "INSERT INTO users (fullname, address, contact, email, username, password)
                                        VALUES ( '$fullname', '$address', '$contact','$email', '$username', '$password');" 
                                 );   
                                         
              if(!$add) {
                die(mysqli_error($conn));
              } else {
                echo '<h1>Successfully Added!</h1>';
              }
            }
    
        ?>
   
            
    <form name="register" id="register" action="" method="post" enctype="multipart/form-data">
        

            
                <label for="name" >FullName</label>

                <input name="fullname" id="name" type="text"
                        placeholder="Full Name"
                        required>
            


          
                <label for="address" >Address</label>

                <input name="address" type="text" id="address"
                        
                        placeholder="Address"
                        >
            

        

            
                <label for="contact" >Contact No</label>

                <input name="contact" type="text" id="contact"
                        
                        placeholder="Contact"
                        >
            

            
                <label for="email" >Email</label>

                <input name="email" type="text" id="email"
                        
                        placeholder="Email"
                        >
            


            
                <label for="username" >Username</label>

                <input name="username" type="text" id="username"
                        
                        placeholder="Username"
                        required>
            


            
                <label for="password" >Password</label>

                <input name="password" type="password" id="password"
                        
                        placeholder="Password"
                        required>

            
                <label for="password" >Confirm Password</label>

                <input name="cpassword" type="password" id="cpassword"
                        
                        placeholder="Confrim Password"
                        >

                  
            

            
                <button name="submit" type="submit" class="register">Register</button>
            
      
    </form>
        
    
</div>
</div>



</main>
    <footer>
        <h2>&copy; Pro Edu Consultancy</h2>
    </footer>
</div>
</body>
</html>