<?php require_once('initialize.php');?>
<?php require_once('database.php');?>
<?php
function find_featured_events($language=''){
  global $database;
  $sql = "select * from event where language = '$language' order by start_time limit 4";
  $result = $database->query($sql);
  return $result;
}




function find_featured_contents($language=''){
  global $database;
  $sql = "select * from content where language = '$language' and is_featured = true order by post_date desc limit 4";
  $result = $database->query($sql);
  return $result;
}

function find_category_wise_contents($id){
  global $database;
  $sql = "select * from content where category_id = '$id'";
  $result = $database->query($sql);
  return $result;
}

function find_content($id='')
{
  global $database;
  $sql = "select * from content where id = $id limit 1";
  $result = $database->query($sql);
  return $result;
}

function find_event($id='')
{
  global $database;
  $sql = "select * from event where id = $id limit 1";
  $result = $database->query($sql);
  return $result;
}

function find_content_by_parent_id_and_language($id='',$language=''){
  global $database;
  $sql = "select * from content where l_parent = $id and language= '$language' limit 1";
  $result = $database->query($sql);
  return $result;
}

function find_event_by_parent_id_and_language($id='',$language=''){
  global $database;
  $sql = "select * from event where l_parent = $id and language= '$language' limit 1";
  $result = $database->query($sql);
  return $result;
}


function find_all_menu(){
  global $database;
  $sql = "select * from menu where parent_id = 0";
  $result = $database->query($sql);
  return $result;
}

function menu_has_children($id=''){
  global $database;
  $sql = "select * from menu where parent_id = $id";
  $result = $database->query($sql);
  if($result){
    return true;
  } else {
    return false;
  }
}

function menu_dropdown_children($id=''){
  global $database;
  $sql = "select * from menu where parent_id = $id";
  $result = $database->query($sql);
  return $result;

}

function featuredCategory()
{
  global $database;
  $sql = "select * from category where select_for_home = true";
  $category = $database->query($sql);
  return $category;
}

function ContentsByCategory($id='',$language='')
{
  global $database;
  $sql = "select * from content where category_id = $id and language = '$language'" ;
  $result = $database->query($sql);
  return $result;
}

function ContentsByCategoryHome($id='',$language='')
{
  global $database;
  $sql = "select * from content where category_id = $id and language = '$language' limit 4" ;
  $result = $database->query($sql);
  return $result;
}

function find_all_category()
{
  global $database;
  $sql = "select * from category" ;
  $result = $database->query($sql);
  return $result;
}

function find_all_contents_of_category($id='', $language='')
{
  global $database;
  $sql = "select * from content where category_id = $id and language= '$language' order by post_date desc" ;
  $result = $database->query($sql);
  return $result;
}


function category_has_content($id='', $language='')
{
  global $database;
  $sql = "select * from content where category_id = $id and language= '$language'" ;
  $result = $database->query($sql);
  if($result) {
    return true;
  } else {
    return false;
  }
}


function find_category_by_id($id='')
{
  global $database;
  $sql = "select * from category where id = $id limit 1" ;
  $result = $database->query($sql);
  return $result;
}









?>
