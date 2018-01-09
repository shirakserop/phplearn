<?php require_once('../../../private/initialize.php') ?>
<?php
  $id = $_GET['id'] ?? '1';
  $subject = find_subject_by_id($id); //THIS FUNCTION IS AN ASSOC ARRAY
 ?>
<?php include(SHARED_PATH . '/staff_header.php');?>

<div id="content">
<a href="<?php echo url_for('/staff/subjects/index.php');
?>">&laquo; Back</a>



<div class="subject show">
  <table class="list">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Visible</th>
      <th>Position</th>
    </tr>
    <tr>
      <td> <?php echo $subject['id'];?> </td>
      <td> <?php echo $subject['menu_name'];?> </td>
      <td> <?php echo $subject['visible'] == '1' ? 'true' : 'false'  ?> </td>
      <td> <?php echo $subject['position'];?> </td>
    </tr>
  </table>
</div>

</div>
<?php include(SHARED_PATH . '/staff_footer.php') ?>
