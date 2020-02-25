<?php require_once('initialize.php');?>
<?php require_once('database.php');?>
<?php
function find_featured_events($language=''){
  global $database;
  $sql = "select * from event where language = '$language' order by start_time limit 4";
  $result = $database->query($sql);
  return $result;
}

























?>
