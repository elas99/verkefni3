<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
 <ul id="nav">
 <li><a href="index.php" <?php if ($currentPage == 'index.php') {
 echo 'id="here"';} ?>>Home</a></li>
 <li><a href="blog.php" <?php if ($currentPage == 'blog.php') {
 echo 'id="here"';} ?>>Blog</a></li>
 </ul>