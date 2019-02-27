<?php 
$path = './';
$page = 'Quiz';
#include $path. 'assets/inc/header.php';
require $path.'../../../dbConnect.inc';
?>
<?php session_start();  ?>

<?php ?>
<?php
    
     $totalScore = 0;
    //  $username = $_SESSION['username'];
      if(!isset($_SESSION['username'])){
           $_SESSION['username'] = "";
      }

//   $username = 1;
     
//   if(isset($_SESSION['username'])){
//      $username =  $_SESSION['username'];
//   }
  
  //check to see if quiz score is set_error_handler
  if(!isset($_SESSION['score'])){
      $_SESSION['score'] = 0;
  }
 
    //check if form was submited
    if($_POST['submit']){
        $number = $_POST['number'];
        $selected_choice = $_POST['choice'];
       # $username =  $_SESSION['username'];
        $next = $number + 1;
        $total = 4;

        //get total number of questions
        $sql = "select * from questions";
        $results = $mysqli->query($sql);
        $total=$results->num_rows;

        //get the correct answer
        $sql = "select * from choices where question_number = $number and is_correct=1";
        $result = $mysqli->query($sql);

        $answers = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $correct_choice = $answers['id'];

        //get the username and test of scores of the user
        
        // if($result){
        //     while($rowHolder = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        //         $answers[] = $rowHolder;
        //     }
        // }

       

        //compare selected answer with correct answer in the database
        // if answer is correct update the score
        if($correct_choice == $selected_choice){
            $_SESSION['score']++;

        }
        
        if($number == $total){  
         #  $_SESSION['attempts'] += 1;
         if($mysqli){
            $user = $_SESSION['username'];
            $totalScore = $_SESSION['score'];
            $stmt=$mysqli->prepare("insert into testsocres (username, testscore) values('$user', '$totalScore')");
            $stmt->bind_param("si", $user, $totalScore);
            $stmt->execute();
            $stmt->close();

         }
         else{
             die("database connection error");
         }
              
            header("Location: scoresummary.php");
            exit();

        }else {
            header("Location: questions.php?n=".$next."&score=".$_SESSION['score']);
        }

    }
?>