<?php 
 include_once 'header2.php';
?>


<section class="container container-fluid">
	<div class="row">
     
<!--Message will be shown if a session is found, if not then a form will show to prompt Login-->                                   
    <?php 
      if(isset($_SESSION['u_id'])) {
        
        echo "You are logged in!";
        } else {
                echo'<div class="col-md-6 mx-auto">

                    <div class="card">
                        <div class="card-header">
                            <h2 class="mb-0">Login</h2>
                        </div>
                        <div class="card-body"> 
                            <form class="form" action="login.php" method="POST">
                                <div class="form-group">
                                    <label for="uid">Username/Email Address</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="uname" required>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" name="upwd" required>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg float-right" name="submit">Login</button>
                            </form>
                        </div>
                  </div>';
      }
    ?>
   
  </div>
</section>
