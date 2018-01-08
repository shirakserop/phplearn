<?php

function url_for($script_path){
  if($script_path[0] != '/'){
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}

function u($string=""){
  return urlencode($string); // makes the url string encoded it makes it simpler
}

function u_raw($string=""){
  return rawurlencode($string); // same work but another way
}

function h($string=""){
  return htmlspecialchars($string); // it is importent for security stuff it makes the html codes unexcutable in url
}

function error_404(){
  header($_SERVER["SERVER_PROTOCOL"] . "404 NOT FOUND"); // header($String , "" )
  exit();
}

function error_500(){
  header($_SERVER["SERVER_PROTOCOL"] . "500 internal server error");
  exit();
}

function redirect_to($location){
  header("Location:" . url_for($location));
  exit;
}
function is_post_request(){
  return $_SERVER['REQUEST_METHOD'] == 'POST'; //RETURN TRUE OR FALSE // the type of request
}

function is_get_request(){
  return $_SERVER['REQUEST_METHOD'] == 'GET'; //RETURN TRUE OR FALSE
}

?>
