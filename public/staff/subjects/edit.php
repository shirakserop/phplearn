<?php require_once('../../../private/initialize.php');
  if(!isset($_GET['id'])){
    return redirect_to('/staff/subjects/index.php');
  }
  $id = $_GET['id'];
  //default values
  // $menu_name = '';
  // $position = '';
  // $visible = '';


if(is_post_request()){    // it checks if there is a post request , if not it will redirect the page to new.php
  $subject = [];
  $subject['id'] = $id;
  $subject['menu_name'] = $_POST['menu_name'] ? $_POST['menu_name']: '';
  $subject['position'] = $_POST['position'] ?  $_POST['position']: '';
  $subject['visible'] = $_POST['visible'] ? $_POST['visible']: '';

  $result = update_subject($subject);
  redirect_to('/staff/subjects/show.php?id=' . $subject['id'] );
 }else{
   $subject = find_subject_by_id($id); //returns an associated array with all the subjects
   $subject_set = find_all_subjects(); //selects all subjects in the Sql table
   $subject_count= mysqli_num_rows($subject_set); // returns the number of rows (subjects) in the subject table
   mysqli_free_result($subject_set); //free the results that have been set in subject_set variable
 }

?>
<?php $page_title = 'Subjects'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <a href="<?php echo url_for('/staff/subjects/index.php');?>">&laquo; Back</a>
  <div class="subject edit">
    <h1>Edit Subject</h1>

    <form action="<?php echo url_for('/staff/subjects/edit.php?id=' . h(u($id)));?>" method="post">
      <dl>
        <dt>Menu Name</dt>
        <dd> <input type="text" name="menu_name" value="<?php echo h($subject['menu_name']); ?>"/>  </dd>
      </dl>
      <dl>
          <dt>Position</dt>
          <dd>
            <select name="position">
              <?php for($i=1; $i <= $subject_count; $i++){
                echo "<option value=\"{$i}\"";
                  if($subject['possition'] == $i){
                    echo " selected";
                  }
                echo ">{$i}</option>";
              }
                ?>
            </select>
          </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0"/>
          <input type="checkbox" name="visible" value="1" <?php if($subject['visible'] == "1"){echo "checked";} ?> >
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Edit Subject">
      </div>
    </form>
  </div>
</div>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
