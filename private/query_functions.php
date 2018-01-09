<?php

  function find_all_subjects(){
    global $db;
    $sql = "SELECT * FROM subjects ";
    $sql .="ORDER BY position ASC";
    //exho $sql;
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
  }

  function find_subject_by_id($id){
    global $db;
    $sql = "SELECT * FROM subjects "; //selecting table from the database
    $sql .= "WHERE id='" . $id . "'"; // selecting table by id with id dynamic
    $result = mysqli_query($db, $sql);  //applying sql query
    confirm_result_set($result);  //checking if the the result variable is exist if not return the problem
    $subject = mysqli_fetch_assoc($result);   //IMPORT TABELS FROM DATABASE AS ASSOCIATED ARRAY
    mysqli_free_result($result); // FREE THE MEMOREY
    return $subject; //returns an assoc array

  }
  function insert_subject($menu_name, $position, $visible){
    global $db;

    $sql = "INSERT INTO subjects";
    $sql .= "(menu_name, position, visible)";
    $sql .= "VALUE (";
    $sql .= "'" . $menu_name . "',";
    $sql .= "'" . $position . "',";
    $sql .= "'" . $visible . "'";
    $sql .= ")";

    $result = mysqli_query($db, $sql);
    //For INSERT stateménts , $result is true/false
     if($result){
      return true;
     }else{
       //INSERT FAILED
       echo mysqli_error($db);
       db_disconnect($db);
       exit;
     }

  }

  function update_subject($subject){
    global $db;

    $sql = "UPDATE subjects SET ";
    $sql .= "menu_name='" . $subject['menu_name'] .  "', ";
    $sql .= "position='" . $subject['position'] . "', ";
    $sql .= "visible='" . $subject['visible'] . "' ";
    $sql .= "WHERE id='" . $subject['id']. "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);
      //For Update statments , $result is true/false
      if($result){
          //success
          return true;
      }else {
        //Update failed
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
      }
  }
  function find_all_pages(){
    global $db;
    $sql = "SELECT * FROM page ";
    $sql .="ORDER BY subject_id ASC, position ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
  }




 ?>
