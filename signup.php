<?php 
  include_once 'header.php';
?>

<section class="container container-fluid">
	<div class="row">
    
    <!-- Sign up form within a card , create a signup form for new user-->

                <div class="col-md-6 mx-auto">

                    <div class="card">
                        <div class="card-header">
                            <h2 class="mb-0">Sign Up</h2>
                        </div>
                        <div class="card-body"> 
                            <form class="form" action="includes/signup.inc.php" method="POST">
                                <div class="form-group">
                                    <label for="first">First Name</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="first" required>
                                </div>
                                <div class="form-group">
                                    <label for="last">Last Name</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="last" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="uid">Username</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="uid" required>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" name="pwd" required>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg float-right" name="submit">Sign Up</button>
                            </form>
                        </div>
                  </div>
  </div>
</section>

<?php 
  include_once 'footer.php';
?>
  