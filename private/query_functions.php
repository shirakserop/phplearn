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
  function insert_subject($subject){
    global $db;

    $sql = "INSERT INTO subjects";
    $sql .= "(menu_name, position, visible)";
    $sql .= "VALUE (";
    $sql .= "'" . $subject['menu_name'] . "',";
    $sql .= "'" . $subject['position'] . "',";
    $sql .= "'" . $subject['visible'] . "'";
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
  function delete_subject($id){
    global $db;

    $sql = "DELETE FROM subjects ";
    $sql .= "WHERE id='" . $id . "' ";
    $sql .= "LIMIT 1";

    $result = mysqli_query($db, $sql);

    //For DELETE statements, $result is true/false
    if($result){
      return true;
    }else {
      //DELETE failed
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
    $sql .= "visible='" . $subject['visible'] . "', ";
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
  function find_page_by_id($id){
    global $db;
    $sql = "SELECT * FROM page ";
    $sql .= "WHERE id='" . $id . "'";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $page = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $page; // returns an associated array
  }
  function insert_page($page){
    global $db;

    $sql =  "INSERT INTO page ";
    $sql .= "(subject_id, page_name, position, visible, content) ";
    $sql .= "VALUES (";
    $sql .= "'" . $page['subject_id'] . "',";
    $sql .= "'" . $page['page_name'] . "',";
    $sql .= "'" . $page['position'] . "',";
    $sql .= "'" . $page['visible'] . "',";
    $sql .= "'" . $page['content'] . "'";
    $result = mysqli_query($db, $sql);
    //for INSERT statments, $result is true / false
    if($result){
      return true;
    }else {
      //INSERT failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }
  function update_page($page){
    global $db;
    $sql = "UPDATE page SET ";
    $sql .= "subject_id='" . $page['subject_id'] . "', ";
    $sql .= "page_name='" . $page['page_name'] . "', ";
    $sql .= "position='" . $page['position'] . "', ";
    $sql .= "visible='" . $page['visible'] . "', ";
    $sql .= "content='" . $page['content'] . "' ";
    $sql .= "WHERE id='" . $page['id'] . "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);
    //for UPDATE statments, $result is true / false
    if($result){
      return true;
    }else {
      //update FAILED
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }

  function delete_page($id){
    global $db;

    $sql = "DELETE FROM page ";
    $sql .= "WHERE id='" . $id . "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);

    //for delete statments, $result is true / find_all_subjects
    if($result){
      return true;
    } else {
      //delete FAILED
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }

  }

 ?>
