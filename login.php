<?php
	$path = './';
	$page = 'Login';
    $filename = 'login.php';
	include $path.'assets/inc/header.php';
?>
<?php include('server.php') ?>

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
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p class = "switchtext">
  		<a href="register.php">Not yet a member? Sign up</a>
  	</p>
  </form>
</div> <!-- End Content -->

<footer class="footer">

<?php
	include $path.'assets/inc/footer.php';
?>
