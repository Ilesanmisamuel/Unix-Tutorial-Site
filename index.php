<?php
	$path = './';
	$page = 'Intro to Unix!';
    $filename = 'index.php';
	include $path.'assets/inc/header.php';
?>

    <div class="blurb">
        <p>Welcome! We're here to teach the next generation of coders the basics of Unix, a super powerful building block of the internet! Start with lesson 1 and go through the the course! There's only three lessons and a fun game in between to help make sure you're understanding everything! After you complete all the courses, you'll be more than ready for the quiz!</p>
    </div>

    <div class="step1" onmouseover="changeBG(0);">
        <a href="lesson1.php">

            <div class="fill con1">
                <div class="buttons">
                    <h2>LESSON ONE</h2>
                    <h5>unix file management</h5>
                </div>
            </div>
        </a>

    </div>

    <div class="game1" onmouseover="changeBG(1);">
        <a href="game1.php">
            <div class="fill con2">
                <div class="buttons">

                    <h2>GAME ONE</h2>
                    <h5>unix sandwich stacker</h5>
                </div>

            </div>
        </a>
    </div>

    <div class="step2" onmouseover="changeBG(2);">
        <a href="lesson2.php">
            <div class="fill con3">
                <div class="buttons">
                    <h2>LESSON TWO</h2>
                    <h5>unix sandwich stacker - easy</h5>
                </div>

            </div>
        </a>
    </div>

    <div class="game2" onmouseover="changeBG(3);">
        <a href="game2.php">
            <div class="fill con4">
                <div class="buttons">

                    <h2>GAME TWO</h2>
                    <h5>unix folder monster</h5>
                </div>

            </div>
        </a>
    </div>

    <div class="step3" onmouseover="changeBG(4);">
        <a href="lesson3.php">
            <div class="fill con5">
                <div class="buttons">
                    <h2>LESSON THREE</h2>
                    <h5>unix sandwich stacker - medium</h5>
                </div>


            </div>
        </a>
    </div>

    <div class="game3" onmouseover="changeBG(5);">
        <a href="game3.php">
            <div class="fill con6">
                <div class="buttons">

                    <h2>GAME THREE</h2>
                    <h5>unix sandwich stacker - hard</h5>
                </div>

            </div>
        </a>
    </div>
    <footer class="footer">

        <?php
	include $path.'assets/inc/footer.php';
?>
