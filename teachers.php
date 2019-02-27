<?php
	$path = './';
	$page = 'Teacher Resources';
    $filename = 'teachers.php';
	include $path.'assets/inc/header.php';
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
  <h1>Teach your Students UNIX!
  </h1>
  <p>Hey Teachers-</p>
  <p>Our site is specially designed to teach kids who are new to coding about the principles and basic commands of UNIX! If you send your students to our site and ask them to go through the three introductory lessons and corresponding games, they'll be in great shape to understand and implement UNIX commands in a Console and understand the complexities of server file structure!</p>
  <p>Below we've made an instructions sheet template that you can use to print out and give to your students to explain how to get to our site and read through the lessons. You can choose if you'd like your students to take the quiz online and have the results emailed to you, or if you'd prefer to print out the quiz document and have them take it in class</p>
  <p>Thanks so much for visiting our site!</p>
  <p>-STFUnix Team</p>

  <div id="downloads">
    <a href="assets/pdfs/instructions.pdf">
      <div class="downloads">
        <p>Student Instructions</p>
      </div>
    </a>
    <a href="assets/pdfs/quiz.pdf">
      <div class="downloads">
        <p>Print Quiz</p>
      </div>
    </a>
    <a href="assets/pdfs/key.pdf">
      <div class="downloads">
        <p>Quiz Answer Key</p>
      </div>
    </a>
  </div>

</div>
<!-- End Content -->

<footer class="footer">

  <?php
  include $path.'assets/inc/footer.php';
?>