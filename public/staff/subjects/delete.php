<?php
  require_once('../../../private/initialize.php');
  if(!isset($_GET['id'])){
    redirect_to('/staff/subjects/index.php');
  }
  $id = $_GET['id'];



  if(is_post_request()){  //if its post request it will excute this code if note it will continue with rest of page
    $result = delete_subject($id);
      redirect_to('/staff/subjects/index.php');
    }else {
      $subject = find_subject_by_id($id);
    }
  ?>

<?php include(SHARED_PATH . '/staff_header.php');  ?>
<div id="content">
  <a href=" <?php echo url_for('/staff/subjects/index.php');  ?> ">&laquo; Back to List</a>
  <div class="subject delete">
      <h1>Delete Subject</h1>
      <p>Are you shure you want to delete this subject? </p>
      <p class="item"> <?php echo h($subject['menu_name']); ?> </p>

      <form action=" <?php echo url_for('staff/subjects/delete.php?id=' . h(u($id))); ?> " method="post">
        <div id="operations">
          <input type="submit" name="commit" value="Delete Subject" />
        </div>
      </form>
  </div>
</div>

<?php include(SHARED_PATH . '/staff_footer') ?>
