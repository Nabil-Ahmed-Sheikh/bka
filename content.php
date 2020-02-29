<?php require_once("includes/query_functions.php"); ?>
<?php
if(isset($_GET['id'])){
  $content = find_content($_GET['id'])[0];
} else {
  redirect_to("home.php");
}


?>


<?php require_once("layouts/header.php"); ?>


<?php if($session->language == 'English'){ ?>

<section class="content-with-sidebar padding-ten brand-color" >
  <div class="container" style="padding: 20px 20px;">
    <div class="card" style="border:none;">
      <img class="card-img" src="<?php echo $content['image_path']; ?>" alt="Card image cap" >
      <div class="card-body" style="background-color:#d8cda1;">
        <h1 class="card-title"><?php echo $content['name']; ?></h1>
        <p class="card-text"><h3><?php echo $content['content']; ?></h3></p>
        <br>
        <p class="card-text"><strong>Post Time : <?php echo date('d M, D, g:i A', strtotime($content['post_date'])); ?></strong></p>
        <input type="text" id="parent_id" name="" value="<?php echo $content['l_parent']; ?>" hidden>
        <input type="text" id="id" name="" value="<?php echo $content['id']; ?>" hidden>
      </div>
    </div>
  </div>
</section>

<?php } elseif($session->language == 'Bangla'){ ?>

<section class="content-with-sidebar padding-ten brand-color" >
  <div class="container" style="padding: 20px 20px;">
    <div class="card" style="border:none;">
      <img class="card-img" src="<?php echo $content['image_path']; ?>" alt="Card image cap" >
      <div class="card-body" style="background-color:#d8cda1;">
        <h1 class="card-title"><?php echo $content['name']; ?></h1>
        <p class="card-text"><h3><?php echo $content['content']; ?></h3></p>
        <br>
        <p class="card-text"><strong>পোস্ট সময় : <?php echo time_eng_to_bengali($content['post_date']); ?></strong></p>
        <input type="text" id="parent_id" name="" value="<?php echo $content['l_parent']; ?>" hidden>
        <input type="text" id="id" name="" value="<?php echo $content['id']; ?>" hidden>
      </div>
    </div>
  </div>
</section>

<?php } elseif($session->language == 'Arabic'){ ?>

<section class="content-with-sidebar padding-ten brand-color" >
  <div class="container" style="padding: 20px 20px;">
    <div class="card" style="border:none;">
      <img class="card-img" src="<?php echo $content['image_path']; ?>" alt="Card image cap" >
      <div class="card-body" style="background-color:#d8cda1;text-align:right;">
        <h1 class="card-title"><?php echo $content['name']; ?></h1>
        <p class="card-text"><h3><?php echo $content['content']; ?></h3></p>
        <p class="card-text"><strong>الوقت بعد : <?php echo time_eng_to_arabic($content['post_date']); ?></strong></p>
        <input type="text" id="parent_id" name="" value="<?php echo $content['l_parent']; ?>" hidden>
        <input type="text" id="id" name="" value="<?php echo $content['id']; ?>" hidden>
      </div>
    </div>
  </div>
</section>

<?php } ?>


	<?php require_once("layouts/content_footer.php"); ?>
