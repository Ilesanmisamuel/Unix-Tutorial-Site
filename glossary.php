<?php
	$path = './';
	$page = 'Glossary of  Unix!';
    $filename = 'glossary.php';
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
  <div id="C">
    <h2>C</h2>
    <div id="cd">
      <h3><code>cd (name of a directory)</code></h3>
      <p>
        To change from one file to another at any time, use this command.<br>
        e.g. <code>cd subdirectory</code> – changes from current directory to a folder called subdirectory
      </p>
    </div> <!-- End cd -->
    <br>
    <div id="chmod">
      <h3><code>chmod ### (name of a directory)</code></h3>
      <p>
        To change a file permission at any time, use this command below.<br>
        e.g. <code>chmod 755 pictures</code> – sets the file permissions to:<br>
        <span class="tab">Owner permissions: Read, Write, Execute<br></span>
        <span class="tab">Group permissions: Read, Execute<br></span>
        <span class="tab">Public permissions: Read, Execute</span>
      </p>
    </div> <!-- End chmod -->
    <br>
    <div id="cp">
      <h3><code>cp (name of a file) (name of a file)</code></h3>
      <p>
        To copy an ordinary file at any time, use this command below.<br>
        e.g. <code>cp file1 file2</code> – copy file1 to file2<br>
      </p>
    </div> <!-- End chmod -->
    <br>
    <div id="cp-r">
      <h3><code>cp-r (name of a directory) (name of a directory)</code></h3>
      <p>
        To copy a directory, use this command.<br>
        e.g. <code>cp-r dir1 dir2</code> – copies directory dir1 and all of it its ordinary files to dir2
      </p>
    </div> <!-- End cp-r -->
  </div>
  <br>
  <div id="L">
    <h2>L</h2>
    <div id="ls">
      <h3><code>ls (name of a directory)</code></h3>
      <p>
        To list the files in a directory, use this command.<br>
        e.g <code>ls dir1</code> – list the files that are in the directory called dir1
      </p>
    </div> <!-- End ls -->
    <br>
    <div id="ls-l">
      <h3><code>ls -l</code></h3>
      <p>
        To display a file permission at any time, use this command.<br>
        e.g <code>ls -l</code> – list the files that are in the current directory
      </p>
    </div> <!-- End ls -l -->
    <br>
    <div id="ls-la">
      <h3><code>ls -la</code></h3>
      <p>
        To display a file permission at any time, use this command.<br>
        e.g <code>ls -la</code> – list all the files (including hidden ones) that are in the current directory
      </p>
    </div> <!-- End ls -la -->
  </div>
  <br>
  <div id="M">
    <h2>M</h2>
    <div id="mkdir">
      <h3><code>mkdir (name of a directory)</code></h3>
      <p>
        To make a directory, use this command.<br>
        e.g. <code>mkdir pictures</code> – creates a subdirectory called pictures
      </p>
    </div> <!-- End mkdir -->
    <br>
    <div id="mv">
      <h3><code>mv (name of a file) (name of a file)</code></h3>
      <p>
        To move an ordinary file at any time, use this command.<br>
        e.g. <code>mv file1 file2</code> – renames file1 to be file 2
      </p>
    </div> <!-- End mv -->
  </div>
  <br>
  <div id="P">
    <h2>P</h2>
    <div id="pwd">
      <h3><code>pwd</code></h3>
      <p>
        To find out where you are at any time, use this command.<br>
        e.g. <code>pwd</code> – shows the path to the current directory
      </p>
    </div> <!-- End mv -->
  </div>
  <br>
  <div id="R">
    <h2>R</h2>
    <div id="rm">
      <h3><code>rm (name of a file)</code></h3>
      <p>
        To remove or delete a file, use this command.<br>
        e.g. <code>rm img1</code> – delete the file called img1
      </p>
    </div> <!-- End rm -->
    <br>
    <div id="rmdir">
      <h3><code>rmdir (name of a directory)</code></h3>
      <p>
        To remove or delete a directory, use this command.<br>
        e.g. <code>rmdir pictures</code> – delete the directory called pictures
      </p>
    </div> <!-- End rmdir -->
  </div>
  <br>
  <div id="T">
    <h2>T</h2>
    <div id="touch">
      <h3><code>touch (name of a directory)</code></h3>
      <p>
        To create an ordinary file at any time, use this command.<br>
        e.g. <code>rmdir file1</code> – creates an empty file called file1
      </p>
    </div> <!-- End rmdir -->
  </div>

</div> <!-- End Content -->



<footer class="footer">

  <?php
	include $path.'assets/inc/footer.php';
?>