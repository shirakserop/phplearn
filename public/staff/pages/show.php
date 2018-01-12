<?php require_once('../../../private/initialize.php'); ?>
<?php
  $id = $_GET['id'] ?? '1';
  $page = find_page_by_id($id);
 ?>

 <?php $page_title = 'Show Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php');?>

<div id="content">


<a href="<?php echo url_for('/staff/pages/index.php');
?>">&laquo; Back</a>
<table class="list">
  <tr>
    <th>Subject</th>
    <th>Page name</th>
    <th>Position</th>
    <th>Visible</th>
    <th>Content</th>
  </tr>
  <tr>
    <?php $subject = find_subject_by_id($page['subject_id']); ?>
    <td><h3> <?php echo h($subject['menu_name']);?> </h3></td>
    <td><h3> <?php echo h($page['page_name']);?> </h3></td>
    <td><h3> <?php echo h($page['position']);?> </h3></td>
    <td><h3> <?php echo   $page['visible'] == '1' ? 'true' : 'false';?> </h3></td>
    <td><h3> <?php echo h($page['content']);?> </h3></td>
  </tr>
</table>
</div>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
