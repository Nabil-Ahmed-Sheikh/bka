<?php require_once("includes/query_functions.php"); ?>
<?php
if(isset($_GET['id'])){
  $content = find_content($_GET['id'])[0];
} else {
  var_dump();
  exit;
  redirect_to("home.php");
}

$categories = find_all_category();
?>


<?php if($session->language == 'English'){require_once("layouts/header_content_english.php");} elseif($session->language == 'Arabic'){ require_once("layouts/header_content_arabic.php");} else{require_once("layouts/header_content_bangla.php");} ?>


<?php if($session->language == 'English'){ ?>

<section class="content-with-sidebar padding-ten brand-color" style="min-height:calc(100vh - 146px);" >
  <div class="container" style="padding: 20px 20px;">
    <div class="row">
      <div class="col-md-9">
        <div class="card" style="border:none;">
          <img class="card-img " src="<?php echo $content['image_path']; ?>" onerror="this.onerror=null; this.src='assets/images/default.jpg'" alt="Card image cap" >
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
      <div class="col-md-3" style="text-align:center;">
        <h1>All Categories</h1>
        <div class="list-group" style="padding-top:10%;">
          <?php foreach ($categories as $category) { ?>
            <a href="contents.php?id=<?php echo $category['id']; ?>" class="list-group-item list-group-item-action list-group-item-primary"><?php echo $category['name'];?></a>
          <?php } ?>

        </div>
      </div>

    </div>

  </div>
</section>

<?php } elseif($session->language == 'Bangla'){ ?>

<section class="content-with-sidebar padding-ten brand-color" style="min-height:calc(100vh - 146px);">
  <div class="container" style="padding: 20px 20px;">
    <div class="row">
      <div class="col-md-9">
        <div class="card" style="border:none;">
          <img class="card-img " src="<?php echo $content['image_path']; ?>" onerror="this.onerror=null; this.src='assets/images/default.jpg'" alt="Card image cap" >
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
      <div class="col-md-3" style="text-align:center;">

          <h1>সকল বিভাগ</h1>
          <div class="list-group" style="padding-top:10%;">
            <?php foreach ($categories as $category) { ?>
              <a href="contents.php?id=<?php echo $category['id']; ?>" class="list-group-item list-group-item-action list-group-item-primary"><?php echo $category['bangla_name'];?></a>
            <?php } ?>

          </div>

      </div>

    </div>

  </div>
</section>

<?php } elseif($session->language == 'Arabic'){ ?>

<section class="content-with-sidebar padding-ten brand-color" style="min-height:calc(100vh - 146px);">
  <div class="container" style="padding: 20px 20px;">
    <div class="row">
      <div class="col-md-9">
        <div class="card" style="border:none;">
          <img class="card-img " src="<?php echo $content['image_path']; ?>" onerror="this.onerror=null; this.src='assets/images/default.jpg'" alt="Card image cap" >
          <div class="card-body" style="background-color:#d8cda1;text-align:right;">
            <h1 class="card-title"><?php echo $content['name']; ?></h1>
            <p class="card-text"><h3><?php echo $content['content']; ?></h3></p>
            <p class="card-text"><strong>الوقت بعد : <?php echo time_eng_to_arabic($content['post_date']); ?></strong></p>
            <input type="text" id="parent_id" name="" value="<?php echo $content['l_parent']; ?>" hidden>
            <input type="text" id="id" name="" value="<?php echo $content['id']; ?>" hidden>
          </div>
        </div>
      </div>
      <div class="col-md-3" style="text-align:center;">
        <h1>جميع الأقسام</h1>
        <div class="list-group" style="padding-top:10%;">
          <?php foreach ($categories as $category) { ?>
            <a href="contents.php?id=<?php echo $category['id']; ?>" class="list-group-item list-group-item-action list-group-item-primary"><?php echo $category['arabic_name'];?></a>
          <?php } ?>

        </div>
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
        var content = document.getElementById("id").value;


        var url = 'includes/content_route.php';
        var form = $('<form action="' + url + '" method="post">' +
          '<input type="text" name="language" value="' + lang + '" />' +
          '<input type="text" name="parent_id" value="' + parent + '" />' +
          '<input type="text" name="id" value="' + content + '" />' +
          '</form>');
        $('body').append(form);
        form.submit();

      }
  </script>

  </body>
  </html>
