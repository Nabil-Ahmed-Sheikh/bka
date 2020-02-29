<?php require_once("initialize.php"); ?>
<?php require_once("query_functions.php"); ?>
<?php
if(isset($_POST['parent_id'])){


  if($_POST['parent_id'] != '' && $_POST['language'] != ''){
    if(isset($session->language)){
      $session->set_language($_POST['language']);
    }
    $content = find_content_by_parent_id_and_language($_POST['parent_id'],$_POST['language'])[0];
    if($content==null){
      redirect_to('../home.php');
    } else {
      redirect_to('../content.php?id='.$content['id']);
    }

  } else {
    redirect_to('../home.php');
  }
} else{
  redirect_to('../home.php');
}

?>
