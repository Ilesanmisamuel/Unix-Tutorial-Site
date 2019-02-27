<?php
	$path = './';
	$page = 'Unix Quiz';
    $filename = 'questions.php';
    require $path.'../../../dbConnect.inc';
	include $path.'assets/inc/header.php';
?>
<?php  session_start(); ?>
<?php
     //set question number
     $number = (int) $_GET['n'];


     //get total number of questions
     $sql = "select * from questions";
     $results = $mysqli->query($sql);
     $total = $results->num_rows;
    

     //Get question from the database
     $sql = "select * from questions where question_number = $number";

     //get the result of the sql statement
     $result = $mysqli->query($sql);

     if($result){
         while($rowHolder = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $questions = $rowHolder;
         }
     }

     //Get Choices from the database
     $sql = "select * from choices where question_number = $number";

      //get results
      $res = $mysqli->query($sql);
      if($res){
          while($rowChoice = mysqli_fetch_array($res, MYSQLI_ASSOC)){
              $choices[] = $rowChoice;
          }
    } 
?>
<!-- navigation -->
<div class="logo">
  <div class="logopic">
    <a href="index.php">
      <img class="logopic" src="assets/imgs/logo.png" alt="Logo">
    </a>
  </div>
</div>

<div class="nav">
  <div class="nav1">
    <a href="glossary.php">
      <h4>Glossary</h4>
    </a>
  </div>

  <div class="nav2">
    <a href="quiz.php">
      <h4>Final Quiz</h4>
    </a>
  </div>

  <div class="nav3">
    <a href="about.php">
      <h4>About Us</h4>
    </a>
  </div>

  <div class="nav4">
    <a href="teachers.php">
      <h4>Teachers</h4>
    </a>
  </div>
</div>
<!-- Mobile navigation -->
<div class="navigation">
  <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

  <label for="navi-toggle" class="navigation__button">
    <span class="navigation__icon">&nbsp;</span>
  </label>
  <div class="navigation__background">&nbsp;</div>

  <nav class="navigation__nav">
    <ul class="navigation__list">
      <li class="navigation__item"><a href="index.php" class="navigation__link">home</a></li>
      <li class="navigation__item"><a href="glossary.php" class="navigation__link">glossary</a></li>
      <li class="navigation__item"><a href="quiz.php" class="navigation__link">final quiz</a></li>
      <li class="navigation__item"><a href="about.php" class="navigation__link">about us</a></li>
      <li class="navigation__item"><a href="teachers.php" class="navigation__link">teachers</a></li>
      <li class="navigation__item"><a href="lesson1.php" class="navigation__link">lesson 1</a></li>
      <li class="navigation__item"><a href="game1.php" class="navigation__link">game 1</a></li>
      <li class="navigation__item"><a href="lesson2.php" class="navigation__link">lesson 2</a></li>
      <li class="navigation__item"><a href="game2.php" class="navigation__link">game 2</a></li>
      <li class="navigation__item"><a href="lesson3.php" class="navigation__link">lesson 3</a></li>
      <li class="navigation__item"><a href="game3.php" class="navigation__link">game 3</a></li>
    </ul>
  </nav>
</div>

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
  <h1>Unix Quiz Questions</h1>
  <br>
  <div class="current">
    Question
    <?php echo $number;?> of
    <?php echo $total;?>
  </div>
  <div class="question">
    <?php echo  $questions['question']; ?>
  </div>
  <form method="POST" action="process.php">
    <ul class="choices">
      <?php 
        foreach($choices as $choice){
          echo '<div class=\"tab\">
                  <label>
                  <input name="choice" type="radio" value="'.$choice['id'].'"/>' 
                  // If I move the /> to the end div inside the '' it doesn't show the text added by
                  // the $choice['choice'], but if left where it currently is you can't click on the text for the answer.
                  .$choice['choice'].
                '</label></div>'; // eg '/></div>';
        }//end for each loop
      ?>
    </ul>
    <input type="submit" value="submit">
    <input type="hidden" name="number" value="<?php echo $number;?>">
  </form>
</div>
<!-- End Content -->

<footer class="footer">

  <?php
  include $path.'assets/inc/footer.php';
?>