<?php require_once("includes/query_functions.php"); ?>
<?php
if(isset($_GET['id'])){
  $event = find_event($_GET['id'])[0];
} else {
  redirect_to("home.php");
}


?>


<?php require_once("layouts/header.php"); ?>


<?php if($session->language == 'English'){ ?>

<section class="content-with-sidebar padding-ten brand-color" >
  <div class="container" style="padding: 20px 20px;">
    <div class="card" style="border:none;">
      <img class="card-img" src="<?php echo $event['image_path']; ?>" alt="Card image cap" >
      <div class="card-body" style="background-color:#d8cda1;">
        <h1 class="card-title"><?php echo $event['name']; ?></h1>
        <p class="card-text"><h3><?php echo $event['content']; ?></h3></p>
        <br>
        <h4 class="card-text"><strong>Starts at: </strong><?php echo date('d M, D, g:i A', strtotime($event['start_time'])); ?></h4>
        <h4 class="card-text"><strong>Ends at: </strong><?php echo date('d M, D, g:i A', strtotime($event['end_time'])); ?></h4>
        <h4 class="card-text"><strong>Venue: </strong><?php echo $event['place']; ?></h4>
        <input type="text" id="parent_id" name="" value="<?php echo $event['l_parent']; ?>" hidden>
        <input type="text" id="event_id" name="" value="<?php echo $event['id']; ?>" hidden>
      </div>
    </div>
  </div>
</section>

<?php } elseif($session->language == 'Bangla'){ ?>

<section class="content-with-sidebar padding-ten brand-color" >
  <div class="container" style="padding: 20px 20px;">
    <div class="card" style="border:none;">
      <img class="card-img" src="<?php echo $event['image_path']; ?>" alt="Card image cap" >
      <div class="card-body" style="background-color:#d8cda1;">
        <h1 class="card-title"><?php echo $event['name']; ?></h1>
        <p class="card-text"><h3><?php echo $event['content']; ?></h3></p>
        <br>
        <h4 class="card-text"><strong>শুরু সময়: </strong><?php echo time_eng_to_bengali($event['start_time']); ?></h4>
        <h4 class="card-text"><strong>শেষ সময়: </strong><?php echo time_eng_to_bengali($event['end_time']); ?></h4>
        <h4 class="card-text"><strong>স্থান: </strong><?php echo $event['place']; ?></h4>
        <input type="text" id="parent_id" name="" value="<?php echo $event['l_parent']; ?>" hidden>
        <input type="text" id="event_id" name="" value="<?php echo $event['id']; ?>" hidden>
      </div>
    </div>
  </div>
</section>

<?php } elseif($session->language == 'Arabic'){ ?>

<section class="content-with-sidebar padding-ten brand-color" >
  <div class="container" style="padding: 20px 20px;">
    <div class="card" style="border:none;">
      <img class="card-img" src="<?php echo $event['image_path']; ?>" alt="Card image cap" >
      <div class="card-body" style="background-color:#d8cda1;text-align:right;">
        <h1 class="card-title"><?php echo $event['name']; ?></h1>
        <p class="card-text"><h3><?php echo $event['content']; ?></h3></p>
        <h4 class="card-text"><strong>وقت البدء : </strong><?php echo time_eng_to_arabic($event['start_time']); ?></h4>
        <h4 class="card-text"><strong>نهاية الوقت : </strong><?php echo time_eng_to_arabic($event['end_time']); ?></h4>
        <h4 class="card-text"><strong>مكان : </strong><?php echo $event['place']; ?></h4>
        <input type="text" id="parent_id" name="" value="<?php echo $event['l_parent']; ?>" hidden>
        <input type="text" id="event_id" name="" value="<?php echo $event['id']; ?>" hidden>
      </div>
    </div>
  </div>
</section>

<?php } ?>


	<?php require_once("layouts/event_footer.php"); ?>
