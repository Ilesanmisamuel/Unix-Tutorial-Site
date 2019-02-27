<?php
	$path = './';
	$page = 'Unix Quiz';
    $filename = 'questions.php';
    require $path.'../../../dbConnect.inc';
	include $path.'assets/inc/header.php';
?>
<?php session_start();  ?>

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
          Question <?php echo $number;?> of <?php echo $total;?>
        </div>
        <div class="question">
            <?php echo  $questions['question']; ?>
        </div>
        <form method="POST" action="process.php">
          <div class=tab>
              <?php 
                 foreach($choices as $choice){
                   echo '<label>
                       <input name="choice" type="radio" value="'.$choice['id'].'">'.
                        $choice['choice'] .'</label><br>';

                 }//end for each loop
               ?>
          </div>
          <input type="submit" name="submit" value="submit">
             <input type="hidden" name="number" value="<?php echo $number;?>">

       </form>
</div>
<!-- End Content -->

<footer class="footer">

  <?php
  include $path.'assets/inc/footer.php';
?>