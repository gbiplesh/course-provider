<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pro Edu Consultancy</title>
  <link href="css/main.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <link href="css/table.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body>
  <div id="wrapper">
  <header>
    <h1>Pro Edu Consultancy</h1>
    <menu>
      <ul>
        <div class="menu-container">
          <li><a href="index.php">Home</a></li>
					<li><a href="courses.html">Courses</a></li>
				<li><a href="contact.html">Contact Us</a></li>
		
		
				<li><a href="login.php">Login</a></li>
				<li><a href="registration.php">Register</a></li>
        <li> 
          <form class="example" action="search.php" method='post'>
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </li>
		
      
        </div>
      </ul>

    </menu>
  </header>
  <main>

<div>

    <h1 style="text-align: center;" > Search Results </h1>
    
  
		<?php
			require( 'config.php' );

      $searchedItem = htmlspecialchars($_POST['search']);

				$query ="SELECT 
							* 
						FROM 
							courses  
						WHERE
							courses.name LIKE '%$searchedItem%';   
				";
				
				$result = mysqli_query($conn, $query );
				
				if ( $result && mysqli_num_rows($result) > 0 ) {
			?>	

		<?php
					while($item = mysqli_fetch_assoc($result)) {

		?>
					 <div id="courses">
            	<div class="row">
            		<div class="col-4">
            			<div>
            			<h2><?php echo $item['name']; ?></h2>
            			<h4><?php echo $item['description']; ?></h4>
            			<h2>$<?php echo $item['prices']; ?></h2>
            			<h4>Available seats: <?php echo $item['seats']; ?></h4>
                  
									<button class="enquire" type="submit"  >ENQUIRE</button>
                  </div>
            		</div>
              </div> 
            </div>
		<?php
					}
				} else {
   	?>	

        <h3 style="text-align: center;" > Sorry! <?php echo $searchedItem; ?> not available! </h3>
		<?php       
        }

		?>
  <br> 

            
           
              

</div>

</main>
    <footer>
        <h2>&copy; Pro Edu Consultancy</h2>
    </footer>
</div>
</body>
</html>