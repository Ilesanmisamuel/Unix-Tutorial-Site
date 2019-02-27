<?php
	$path = './';
	$page = 'Lesson 1';
    $filename = 'lesson1.php';
	include $path.'assets/inc/header.php';
?>
   
    <div class="sidenav">
        <div class="slidenav">
            <a href="lesson1.php">
                <div class="sidebuts active side1">
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
        <h1>Lesson 1 - Unix File Management</h1>
        <h3>Part 1</h3>
        <p>
            In this tutorial, we will talk about the different types of files in Unix. All data in Unix is organized into files. All files are organized into directories. These directories are organized into a tree-like structure called the Unix file system.
        </p>
        <p>
            While using UNIX, you will spend most of your time working with different types of files. This tutorial will help you understand how to create, remove, copy and rename different types of files in UNIX.

        </p>
        <p>
            In Unix, there are three basic types of files −

        </p>
        <ul>
            <li><b>Ordinary Files − </b>An ordinary file is a file on the system that contains data or text.
            </li>
            <li><b>Directories −</b>A directory stores both special and ordinary files. For users familiar with Windows or Mac OS, Unix directories are equivalent to folders.</li>
            <li><b>Special Files −</b>Some special files provide access to your hardware such as hard drives, CD-ROM drives, modems, and Ethernet adapters. That is why they are special.
            </li>
        </ul>
        <br>

       <div class="question1">
        <!-- Question 1-->
        <form>
            <legend id="legendo">Question 1: How many type of files do we have in Unix?</legend>
            <!-- Note the <label> tags below that allow the user to click on the text! -->
            <input type="radio" name="fileSize" value="F" id="five" /><label for="five">Five</label><br />
            <input type="radio" name="fileSize" value="T" id="three" /><label for="three">Three</label><br />
            <input type="radio" name="fileSize" value="S" id="seven" /><label for="seven">Seven</label><br />
            <input type="radio" name="fileSize" value="O" id="one" /><label for="one">One</label><br />
            <p id="questionone"></p>
            <input type="button" onclick="questionone()" class="btn" value="Submit Answer" />
            <!-- Submit buttons-->
        </form>
        </div>

        <br>
        <h3>Part 2</h3>
<!--
        <p>
            Commands you can use to navigate the different type of Files in Unix
        </p>
-->
        <br>
        <h4>Directory Commands: </h4>
        <p class="tab">
            <b>mkdir <i>directoryname</i>: </b>To make a directory at any time use this command below
            <br>
            <b>rmdir <i>directoryname</i>: </b>To remove or delete a directory at any time use this command below
            <br>
            <b>cp-r <i>dir1 dir2</i> : </b>To copy a directory to another directory
            <br>
            <b>ls <i>directoryname</i>: </b>To list the files in a directory
        </p>
        <br>

        <!-- Question from sam -->

        <br>
        <h3>Part 3</h3>
        <h4>Ordinary File Commands:
        </h4>
        <p class="tab">
            <b>touch <i>filename</i>: </b>To create an ordinary
            <br>
            <b>mv <i>file1 file2</i>: </b>To move an ordinary file
            <br>
            <b>rm <i>filename</i>: </b>To remove an ordinary file
            <br>
            <b>cp <i>file1 file2</i>: </b>To copy an ordinary file
        </p>
        <br>

    </div>
    <!-- End Content -->

    <footer class="footer">

        <?php
  include $path.'assets/inc/footer.php';
?>
