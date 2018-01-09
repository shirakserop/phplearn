<?php
  require_once('../../../private/initialize.php');
  if(is_post_request()){    // it checks if there is a post request , if not it will redirect the page to new.php
    //this returns the values as associated array, that we've created from the form
    //the arrays saved in this variables
    $menu_name = $_POST['menu_name'] ? $_POST['menu_name']: '';
    $position = $_POST['position'] ?  $_POST['position']: '';
    $visible = $_POST['visible'] ? $_POST['visible']: '';
    //this function we've created in the "query_functions.php"
    //it inserts the values from this variables in the subject table in SQL database
    $result = insert_subject($menu_name, $position,$visible);
    //this variable with this function return the value of the id
    //beacuse the function above return just true or false value
    $new_id = mysqli_insert_id($db);
    redirect_to('/staff/subjects/show.php?id=' . $new_id);

   } else {
     redirect_to('/staff/subjects/new.php');
 }
 ?>
