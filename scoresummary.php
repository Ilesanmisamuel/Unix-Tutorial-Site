<?php 
  $path = './';
  $page = 'Unix Quiz Scores';
  $filename = 'scoresummary.php';
  include $path.'assets/inc/header.php';
  require $path.'../../../dbConnect.inc';

  if(isset($_GET['logout'])){
      session_destroy();
      unset($_SESSION['username']);
      header("Location: login.php");
  }
?>
<?php  session_start(); ?>

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
  <h1>Unix Quiz Report</h1>
  <br>
  <h2>Quiz Completed</h2>
  <p class="abovebelow">Congrats! You have completed the test</p>
  <p>Final score: <?php echo $_SESSION['score']; ?></p>
  <a href="questions.php?n=1" class="start">Try again?</a>
  <a class="btn btn--green" href="login.php?logout=1">logout</a>
</div>  <!-- End Content -->

<footer class="footer">

  <?php
  include $path.'assets/inc/footer.php';
?>