<?php
	$path = './';
	$page = 'Lesson 2';
    $filename = 'lesson2.php';
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
                <div class="sidebuts active side3">
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
        <h1>Lesson 2 - Unix File Structure
        </h1>
        <br>
        <h3>Part 1</h3>
        <p>
            The Unix file system has a tree-like structure. Its first level,
		called the root directory (also popularly known as the home
		directory), is denoted by a '/'. Immediately below the root
		directory are several subdirectories or files. Below this can
		exist your application files, and/or your data files. Like the
		concept of a parent and child relationship, all files in a Unix
		file system are related to one another.
        </p>
        <br>
        <div class="question2">
            <!-- Question 2-->
            <form>
                <p id="question2">Question 1: What is the first(topmost) directory in Unix hierarchy called?</p>
                <!-- Note the <label> tags below that allow the user to click on the text! -->
                <input type="radio" name="directoryType" value="Normal" id="normal" /><label for="normal">Normal</label><br />
                <input type="radio" name="directoryType" value="Top" id="top" /><label for="top">Top</label><br />
                <input type="radio" name="directoryType" value="Root" id="root" /><label for="root">Root(Home)</label><br />
                <input type="radio" name="directoryType" value="High" id="high" /><label for="high">High</label><br />
                <p id="questiontwo"></p>
                <input type="button" onclick="questiontwo()" class="btn" value="Submit Answer" />
                <!-- Submit buttons-->
            </form>
        </div>

        <br>
        <h3>Part 2</h3>
        <p>
            This is a diagram of a "typical" Unix file system. As you can see, the top-most directory is '/' and the directories directly beneath are system directories. In the home system directory, there are subdirectories. Note that as Unix implementations vary, so will this file system hierarchy. For example, under the Home system directories, there are two subdirectories called “fac” and “students.” In some cases, there are also ordinary files under Home, but the organization of most Unix file systems is similar.
        </p>
        <br>
        <img class="imgWidth100" src="assets/imgs/map.png" alt="Site Map">
        <!-- Question 3-->

        <div class="question2">
            <form>
                <p id="question3">Question 3: From the image above, what type of file is Jim?</p>
                <!-- Note the <label> tags below that allow the user to click on the text! -->
                <input type="radio" name="imgFile" value="Dir" id="dir" /><label for="dir">Directory</label><br />
                <input type="radio" name="imgFile" value="Ord" id="ord" /><label for="ord">Ordinary File</label><br />
                <input type="radio" name="imgFile" value="Sev" id="sev" /><label for="sev">Simple File</label><br />
                <input type="radio" name="imgFile" value="Nota" id="nota" /><label for="nota">None Of the Above</label><br />
                <p id="questionthree"></p>
                <input type="button" onclick="questionthree()" class="btn" value="Submit Answer" />
                <!-- Submit buttons-->
            </form>
        </div>

        <br>
        <h3>Part 3</h3>
        <h4>File System Command Lines:
        </h4>
        <p class="tab">
            <b>pwd:</b>To find out where you are at any time
            <br>
            <b>cd:</b>To go into your home directory at any time
            <br>
            <b>cd <i>filename</i> :</b>To change from one file to another at any time
        </p>
        <br>
        <p>
            In the diagram above, let us assume we want to go to the jim directory and we are currently located in the home directory. We would use the following command:
            <br>
            <code>cd home/fac/jim</code>
        </p>
    </div>
    <!-- End Content -->

    <footer class="footer">

        <?php
  include $path.'assets/inc/footer.php';
?>
