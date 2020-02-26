<?php require_once('initialize.php');?>
<?php require_once('database.php');?>
<?php
function find_featured_events($language=''){
  global $database;
  $sql = "select * from event where language = '$language' order by start_time limit 4";
  $result = $database->query($sql);
  return $result;
}

function find_event($id=''){
  global $database;
  $sql = "select * from event where id = $id limit 1";
  $result = $database->query($sql);
  return $result;
}

function find_event_by_parent_id_and_language($id='',$language=''){
  global $database;
  $sql = "select * from event where l_parent = $id and language= '$language' limit 1";
  $result = $database->query($sql);
  return $result;
}

function find_featured_contents($language=''){
  global $database;
  $sql = "select * from content where language = '$language' and is_featured = 'true' order by post_date desc limit 4";
  $result = $database->query($sql);
  return $result;
}

function find_categorywise_contents($id){
  global $database;
  $sql = "select * from content where category_id = '$id'";
  $result = $database->query($sql);
  return $result;
}


























?>
