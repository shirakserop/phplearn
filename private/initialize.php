<?php
  ob_start(); //enabling buffering

  //dirname() return the parent path
  //define php constants
  //__FILE__ return the current file path
  // . between the second arguments is + it will combine the to values
  define("PRIVATE_PATH", dirname(__FILE__));
  define("PROJECT_PATH", dirname(PRIVATE_PATH));
  define("PUBLIC_PATH",  PROJECT_PATH . '/public');
  define("SHARED_PATH",  PRIVATE_PATH . '/shared');

  // Assign the root URL to a PHP constant
  // * Do not need to include the domain
  // * Use same document root as webserver
  // * Can set a hardcoded value:
  // define("WWW_ROOT", '/~kevinskoglund/globe_bank/public');
  // define("WWW_ROOT", '');
  // * Can dynamically find everything in URL up to "/public"
  // $_SERVER['SCRIPT_NAME'] is the path of server url and the main folder @here *globe_bank*.
  // '/public' is the position of the last length of th url
  // '+7' is the sum of '/public' length and SERVER url .
  //strpos() finds the position of string.
  $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
  // substr() return the string of url wich we have from the variable up
  //'0' is the start point and '$public_end' is the length of what we want to return .
  $doc_root = substr($_SERVER['SCRIPT_NAME'],0, $public_end);
  define("WWW_ROOT", $doc_root);
  //it includes the functions page here
  require_once('functions.php');
  require_once('database.php');
  require_once('query_functions.php');
  $db = db_connect();
?>
