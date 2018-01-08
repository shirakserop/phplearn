<?php
  require_once('../../../private/initialize.php');
  if(is_post_request()){    // it checks if there is a post request , if not it will redirect the page to new.php
    $menu_name = $_POST['menu_name'] ? $_POST['menu_name']: '';
    $position = $_POST['position'] ?  $_POST['position']: '';
    $visible = $_POST['visible'] ? $_POST['visible']: '';

     echo "Form parameters <br/> ";
     echo "Menu Name: " . $menu_name . " <br/> ";
     echo "Postion: " . $position . "<br/> ";
     echo "Visible: " . $visible . "<br/> ";

   } else {
     redirect_to('/staff/subjects/new.php');
 }
 ?>
