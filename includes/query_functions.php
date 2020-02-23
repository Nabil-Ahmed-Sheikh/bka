<?php require_once('initialize.php');?>
<?php require_once('database.php');?>
<?php
function find_featured_events(){
  global $database;
  $sql = "select * from event";
  $result = $database->query($sql);
  return $result;
}

























?>
