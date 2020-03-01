<?php require_once("includes/query_functions.php"); ?>
<?php
if(isset($_GET['id'])){
  $event = find_event($_GET['id'])[0];
} else {
  redirect_to("home.php");
}


?>


<?php if($session->language == 'English'){require_once("layouts/header_english.php");} elseif($session->language == 'Arabic'){ require_once("layouts/header_arabic.php");} else{require_once("layouts/header.php");} ?>


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


	<?php require_once("layouts/footer.php"); ?>

  <script type="text/javascript">
      document.getElementById("chooseLanguage").onchange = function() {langChange()};

      function langChange() {
        var lang = document.getElementById("chooseLanguage").value;
        var parent = document.getElementById("parent_id").value;
        var id = document.getElementById("event_id").value;


        var url = 'includes/event_route.php';
        var form = $('<form action="' + url + '" method="post">' +
          '<input type="text" name="language" value="' + lang + '" />' +
          '<input type="text" name="parent_id" value="' + parent + '" />' +
          '<input type="text" name="id" value="' + id + '" />' +
          '</form>');
        $('body').append(form);
        form.submit();

      }
  </script>
