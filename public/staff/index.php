<?php
//include one time the initialize.php in this index page which has variables and functions
require_once('../../private/initialize.php');
?>

<?php // variable for the page title
$page_title = 'Staff Menu';
 ?>

<?php
  //includes staff_header page here 
 include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div id="main_menu">
      <h1>Main Menu</h1>
      <ul>
        <li> <a href="subjects/index.php">Subjects</a></li>
        <li> <a href="pages/index.php">Pages</a></li>
      </ul>
  </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
