<?php

  session_start();

  if(!isset($_SESSION['username'])){
      $_SESSION['msg'] = "You must log in first";
      header('Location: login.php');
  }

  if(isset($_GET['logout'])){
      session_destroy();
      unset($_SESSION['username']);
      header("Location: login.php");
  }

    $path = './';
    $page = 'Unix Quiz';
    $filename = 'quiz.php';
    require $path.'../../../dbConnect.inc';
    include $path.'assets/inc/header.php';

    //Get total number of questions
    $sql = "select * from questions";

    //get results
    $results = $mysqli->query($sql);
    $total = $results->num_rows;

?>
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
  <!-- notification message -->
  <?php if(isset($_SESSION['success'])); ?>
  <div class="errorsuccess">
    <h3>
      <?php 
        unset($_SESSION['sucsess']);
      ?>
    </h3>
  </div>
  <div class="row">
    <div class="test_info center-text">
      <h2 class="secondary-heading">Test your knowledge on Unix</h2>
      <?php if(isset($_SESSION['username'])); ?>
      <p class="paragraph">Welcome <span class="user_info">
          <?php echo $_SESSION['username'] . " "; ?></span>This is a multiple choice quiz to test your knowledge on Unix concepts.
        Best of luck!</p>
      <ul class="test_info_summary">
        <li class="paragraph">Number of Questions:
          <?php echo $total; ?>
        </li>
        <li class="paragraph">Type: Multiple choice</li>
        <li class="paragraph">Estimated Time:
          <?php echo $total*0.5; ?> minutes</li>
      </ul>
      <a class="btn btn--green" href="questions.php?n=1">Start Quiz</a>
      <a class="btn btn--green" href="login.php?logout=1">logout</a>
    </div>
  </div>
</div>  <!-- End Content -->

<footer class="footer">

  <?php
  include $path.'assets/inc/footer.php';
?>
