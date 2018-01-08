<?php require_once('../../../private/initialize.php'); ?>
<?php
  $id = $_GET['id'] ?? '1';
  $page = $_GET['name'] ?? '1';
  $category = $_GET['category'] ?? '1';
 ?>
<?php include(SHARED_PATH . '/staff_header.php');?>

<div id="content">


<a href="<?php echo url_for('/staff/pages/index.php');
?>">&laquo; Back</a>
<table class="list">
  <tr>
    <th>Page</th>
    <th>id</th>
    <th>category</th>
  </tr>
  <tr>
    <td><h3> <?php echo h($page);?> </h3></td>
    <td><h3> <?php echo h($id);?> </h3></td>
    <td><h3> <?php echo h($category);?> </h3></td>
  </tr>
</table>
</div>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
