<?php require_once('../../../private/initialize.php') ?>
<?php
  $id = $_GET['id'] ?? '1';
 ?>
<?php include(SHARED_PATH . '/staff_header.php');?>

<div id="content">
<a href="<?php echo url_for('/staff/subjects/index.php');
?>">&laquo; Back</a>



<div class="subject show">
  Subject ID: <?php echo h($id); ?>
</div>

</div>
<?php include(SHARED_PATH . '/staff_footer.php') ?>
