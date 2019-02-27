<?php
	$path = './';
	$page = 'Lesson 3';
    $filename = 'lesson3.php';
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
                <div class="sidebuts active side5">
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
        <h1>Lesson 3 - Unix File Ownership</h1>
        <br>
        <h3>Part 1</h3>
        <p>
            In this tutorial we will talk about file permissions in Unix, starting with the definitions of file ownership. File ownership is a very important part of Unix that provides a secure method for storing your files. With file permission, you can limit what a certain category of users who have access to your files can do. For example, if you want a certain category of users to not have any access to your file, their permissions will generally be set to  '---', or '0'. If you want a certain category of users to have full permission to access your file, their file permission will be set to 'rwx' or '7'. In Unix, there are three categories of people who can have access to your file, which are listed below.
        </p>
        <ul>
            <li><b>User (File Owner) −</b>The owner's permissions determine what actions the owner of the file can perform on the file.</li>
            <li><b>Group −</b>The group's permissions determine what actions a user, who is a member of the group that a file belongs to, can perform on the file.</li>
            <li><b>Other (World) −</b>The permissions for others indicate what action all other users can perform on the file.</li>
        </ul>
        <br>


        <div class="question3">
            <!-- Question 4-->
            <form onsubmit="return questionfour();">
                <p id="question4">Question 1: How many categories of people can have access to your file in unix?</p>
                <p id="fourans"></p>
                <!-- Note the <label> tags below that allow the user to click on the text! -->
                <input type="radio" name="filePer" value="Four" id="filefour" /><label for="filefour">Four</label><br />
                <input type="radio" name="filePer" value="Five" id="filefive" /><label for="filefive">Five</label><br />
                <input type="radio" name="filePer" value="Six" id="filesix" /><label for="filesix">Six</label><br />
                <input type="radio" name="filePer" value="Three" id="filethree" /><label for="filethree">Three</label><br />
                <p id="questionfour"></p>
                <input type="button" onclick="questionfour()" class="btn" value="Submit Answer" />
                <!-- Submit buttons-->
            </form>
        </div>

        <br>
        <h3>Part 2</h3>
        <p>
            Now that you have learned about the three categories of users that can have access to your file, you will also need to know the different types of permissions you can give to each category. Note that you can set a category permission using either the symbolic permissions or numeric permissions. They all work interchangeably and are listed below alongside what they mean.
        </p>
        <br>
        <h4>Unix Symbolic Permissions:</h4>
        <p class="tab">
            <b>r (read):</b>See all file contents, or if in a directory, see all the files in the directory.<br>
            <b>w (write):</b>Edit or change all file contents, or if in a directory, edit or change all the files in the directory.<br>
            <b>x (execute):</b>Run the files.
        </p>
        <h4>Unix Numeric Permissions:</h4>
        <p class="tab">
            <b>4 for r </b>| Symbolic representation (r-- equals 400)<br>
            <b>2 for w</b>| Symbolic representation (-w- equals 020)<br>
            <b>1 for x</b>| Symbolic representation (--x equals 001)<br>
            <b>0 for -</b>| Symbolic representation (--- equals No permissions, or 000)<br> Other examples of numeric and symbolic permission. r-- equals to 4, r-x equals to 5, rw- equals to 6, rwx equals to 7
        </p>
        <br>


        <div class="question3">
            <!-- Question 5-->
            <form onsubmit="return questionfive();">
                <p id="question5">Question 2: Convert 755 Unix Numeric permission to symbolic permission?</p>
                <!-- Note the <label> tags below that allow the user to click on the text! -->
                <input type="radio" name="cmd" value="Cmdone" id="cmdone" /><label for="cmdone">rw- r-x r-x</label><br />
                <input type="radio" name="cmd" value="Cmdtwo" id="cmdtwo" /><label for="cmdtwo">rwx r-x r-x</label><br />
                <input type="radio" name="cmd" value="Cmdthree" id="cmdthree" /><label for="cmdthree">rwx -wx -wx</label><br />
                <input type="radio" name="cmd" value="Cmdfour" id="cmdfour" /><label for="cmdfour">r-x rw- rw-</label><br />
                <p id="questionfive"></p>
                <input type="button" onclick="questionfive()" class="btn" value="Submit Answer" />
                <!-- Submit buttons-->

            </form>
        </div>

        <br>
        <h3>Part 3</h3>
        <p>
            Now that you have learned the different categories of users that can
		access your files, as well as the different file permissions those files
		can have, you are ready to start setting permissions. But hold on a second,
		We still have file permission operations to discuss! Permission operations are mathematical symbols that help us add or subtract permissions from a category of users (that already have a permission set). For example, the Unix operation <code>chmod u + r file1</code> will add the read permission to the user category.
        </p>
        <br>
        <h4>Unix Permission Operations:</h4>
        <p class="tab">
            <b>+</b> Add to file/directory<br>
            <b>-</b> Subtract from file/directory (can edit or change all files in the directory)<br>
            <b>=</b> set file/directory
        </p>
        <br>


        <!-- Question from sam -->


        <br>
        <h3>Part 4</h3>
        <p>
            You may also be wondering how to identify a file permission or how to set a category permission. Don’t worry, the following commands will help you achieve that.
        </p>
        <p>
            To change a file permission, use the command <code>chmod permission filename/directoryname</code> (example: <code>chmod 444 sam</code>). This command will set the user permission to 4 (r--), along with the group and other permissions. To display a file permission, use the command <code>ls -l</code>. A general permission rule of thumb is to set your file permissions to 744. This gives you full access, while only giving other users read access.
        </p>
    </div>
    <!-- End Content -->

    <footer class="footer">

        <?php
  include $path.'assets/inc/footer.php';
?>
