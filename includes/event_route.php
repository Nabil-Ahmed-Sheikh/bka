<?php require_once("initialize.php"); ?>
<?php require_once("query_functions.php"); ?>
<?php
if(isset($_POST['id'])){
  if($_POST['parent_id'] != ''){
    if($_POST['language'] == 'Bangla'){
      $session->set_language($_POST['language']);
      $event = find_event($_POST['parent_id'])[0];
      if($event==null){
        redirect_to('../home.php');
      } else {
        redirect_to('../event.php?id='.$event['id']);
      }
    } else {
      $session->set_language($_POST['language']);
      $event = find_event_by_parent_id_and_language($_POST['parent_id'],$_POST['language'])[0];
      if($event==null){
        redirect_to('../home.php');
      } else {
        redirect_to('../event.php?id='.$event['id']);
      }
    }

  } else {
    if($_POST['language'] != ''){
        $session->set_language($_POST['language']);
        $event = find_event_by_parent_id_and_language($_POST['id'],$_POST['language'])[0];
        if($event==null){
          redirect_to('../home.php');
        } else {
          redirect_to('../event.php?id='.$event['id']);
        }
    } else {
      redirect_to('../home.php');
    }
  }
} else{
  redirect_to('../home.php');
}

?>
