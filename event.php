<?php require_once("includes/query_functions.php"); ?>
<?php
if(isset($_GET['id'])){
  $event = find_event($_GET['id'])[0];
} else {
  redirect_to("home.php");
}
var_dump($session->language);

?>


<?php require_once("layouts/header.php"); ?>
<section class="content-with-sidebar padding-ten brand-color" >
  <div class="container" style="padding: 20px 20px;">
    <div class="card" style="border:none;">
      <img class="card-img" src="<?php echo $event['image_path']; ?>" alt="Card image cap" >
      <div class="card-body" style="background-color:#d8cda1;">
        <h1 class="card-title"><?php echo $event['name']; ?></h1>
        <p class="card-text"><h3><?php echo $event['content']; ?></h3></p>
        <p class="card-text"><?php echo $event['start_time']; ?></p>
        <p class="card-text"><?php echo $event['end_time']; ?></p>
        <input type="text" id="parent_id" name="" value="<?php echo $event['l_parent']; ?>" hidden>
        <input type="text" id="event_id" name="" value="<?php echo $event['id']; ?>" hidden>

      </div>
    </div>
  </div>
</section>




	<?php require_once("layouts/event_footer.php"); ?>
