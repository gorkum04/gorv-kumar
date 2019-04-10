<?php 
  session_start(); 
?>

<!DOCTYPE html>
<html>
<hehttps://codeanywhere.com/editor/#ad>
  <meta charset="utf-8">
	<title>Home</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
  
</head>
<body>

<header>
  
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Booking System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    
<!--Logout button will replace elements on the right of the nav bar if a session is found-->
    <div class="my-2 my-lg-0"> 
        
      <?php 
          if(isset($_SESSION['u_id'])) {
            echo '<form action="includes/logout.inc.php" method="POST">
                  <button type="submit" class="btn btn-secondary" name="submit">Logout</button>          
                  </form>';       
          } else {
              echo '<ul class="navbar-nav mr-auto">
                      <li class="nav-item active"><a class="nav-link" href="signup.php">Sign Up  <i class="fa fa-user-plus"></i></a></li>
                      <li class="nav-item active"><a class="nav-link" href="index.php">Login  <i class="fa fa-user"></i></a></li>   
                    </ul>';
          } 
      ?> 
        
    </div>
    
  </div>
</nav>

</header>