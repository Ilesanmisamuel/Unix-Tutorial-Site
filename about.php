<?php
	$path = './';
	$page = 'About Us';
    $filename = 'about.php';
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
        <h1>About Us</h1>
        <br>
        <h3>Anika Niva</h3>
        <p>
            Anika was the graphic designer for the team. She worked with Jake on the games and designed the background of a kitchen, and the images used to make the sandwich. She also designed and built the HTML and CSS pages for the site.
        </p>
        <br>
        <h3>Terence Budu-Biney</h3>
        <p>

            Terence was the backend developer for the team. He worked with Sam to create the quiz page. He also worked on creating the database and wrote the php code to process data and authenticate user profiles from the database.

        </p>
        <br>
        <h3>Samuel Ilesanmi</h3>
        <p>
            Sam was the content creator/Ux Designer for the team. He worked with Terence to get the quiz working, he also worked with the rest of the team to make micro questions for the lessons.
        </p>
        <br>
        <h3>Jake Toporoff</h3>
        <p>
            Jake was the information architect for the team. He created the burger stacker game and all levels.
        </p>
        <br>
        <h3>Doug Andrews</h3>
        <p>
            Doug was the team leader. He worked with Anika and Jake on how the game would work. He also worked a bit with Terence and Sam just to make sure everyone was on the same page with what was needed for the final delivery.
        </p>

    </div>
    <!-- End Content -->

    <footer class="footer">

        <?php
	include $path.'assets/inc/footer.php';
?>
