<?php  
    $path = './';
    $page = 'Sign Up';
    $filename = 'login.php';
    require $path.'../../../dbConnect.inc';
    include $path.'assets/inc/header.php';
?>
<?php include('server.php')?>
<div class="sidenav">
  <div class="slidenav">
    <a href="lesson1.php">
      <div class="sidebuts side1">
        <p>Lesson One</p>
      </div>
    </a>
    <a href="game1.php">
      <div class="sidebuts side2">
        <p>Game One</p>
      </div>
    </a>
    <a href="lesson2.php">
      <div class="sidebuts side3">
        <p>Lesson Two</p>
      </div>
    </a>
    <a href="game2.php">
      <div class="sidebuts side4">
        <p>Game Two</p>
      </div>
    </a>
    <a href="lesson3.php">
      <div class="sidebuts side5">
        <p>Lesson Three</p>
      </div>
    </a>
    <a href="game3.php">
      <div class="sidebuts side6">
        <p>Game Three</p>
      </div>
    </a>
  </div>
</div>

<div class="content">
    <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" id="username" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" id="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" id="pass" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" id="pass2" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p class = "switchtext" >
  		<a href="login.php">Already have an account? Sign in</a>
  	</p>
  </form>
</div>  <!-- End Content -->

<footer class="footer">

<?php
  include $path.'assets/inc/footer.php';
?>
