<?php require_once("initialize.php"); ?>
<?php require_once("query_functions.php"); ?>
<?php

if(isset($_POST['id'])){
  if($_POST['parent_id'] != ''){
    if($_POST['language'] == 'Bangla'){
      $session->set_language($_POST['language']);
      $content = find_content($_POST['parent_id'])[0];
      if($content==null){
        redirect_to('../home.php');
      } else {
        redirect_to('../content.php?id='.$content['id']);
      }
    } else {
      $session->set_language($_POST['language']);
      $content = find_content_by_parent_id_and_language($_POST['parent_id'],$_POST['language'])[0];
      if($content==null){
        redirect_to('../home.php');
      } else {
        redirect_to('../content.php?id='.$content['id']);
      }
    }

  } else {
    if($_POST['language'] != ''){
        $session->set_language($_POST['language']);
        $content = find_content_by_parent_id_and_language($_POST['id'],$_POST['language'])[0];
        if($content==null){
          redirect_to('../home.php');
        } else {
          redirect_to('../content.php?id='.$content['id']);
        }
    } else {
      redirect_to('../home.php');
    }
  }
} else{
  redirect_to('../home.php');
}

?>
