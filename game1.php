<?php
	$path = './';
	$page = 'Game 1';
    $filename = 'game1.php';
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
      <div class="sidebuts active side2">
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
  <div class="gamebox">
    <canvas>
      Get a real browser!
    </canvas>
  </div>
  <h3 class="belowCanvas">Use "A" and "D" to move</h3>
  <div id="dontshow">
    <img id="bg" src="assets/imgs/kitchen-01.jpg" />
    <img id="bottomBun" src="assets/imgs/bottombun-02.png" />
    <img id="tomato" src="assets/imgs/tomato-02.png" />
    <img id="lettuce" src="assets/imgs/lettuce-02.png" />
    <img id="burger" src="assets/imgs/burger-02.png" />
    <img id="bacon" src="assets/imgs/bacon-02.png" />
    <img id="cheese" src="assets/imgs/cheese-02.png" />
    <img id="topBun" src="assets/imgs/topbun-02.png" />
    <img id="heart" src="assets/imgs/heart.PNG" />

    <img id="tomato2" src="assets/imgs/tomato1.png" />
    <img id="lettuce2" src="assets/imgs/lettuce1.png" />
    <img id="burger2" src="assets/imgs/burger1.png" />
    <img id="bacon2" src="assets/imgs/bacon1.png" />
    <img id="cheese2" src="assets/imgs/cheese1.png" />
  </div>
</div> <!-- End Content -->

<footer class="footer">

  <?php
	include $path.'assets/inc/footer.php';
?>