<?php require_once("includes/query_functions.php"); ?>
<?php
	if(isset($_POST['language'])){
		$session->set_language($_POST['language']);
	}
	if(!isset($session->language)){
		$session->set_language('Bangla');
	}
?>

<?php
  $categories = find_all_category();
?>


<?php if($session->language == 'English'){require_once("layouts/header_english.php");} elseif($session->language == 'Arabic'){ require_once("layouts/header_arabic.php");} else{require_once("layouts/header.php");} ?>


<?php if($session->language == 'English'){ ?>

  <section class="content-with-sidebar padding-ten brand-color" style="overflow:auto;">
  <div class="container" style="min-height:calc(100vh - 166px);text-align:center">
    <h1>All Categories</h1>
    <div class="list-group" style="padding-top:10%;">
      <?php foreach ($categories as $category) { ?>
        <a href="contents.php?id=<?php echo $category['id']; ?>" class="list-group-item list-group-item-action list-group-item-primary"><?php echo $category['name'];?></a>
      <?php } ?>

    </div>
  </div>
  </section>


<?php } elseif($session->language == 'Bangla'){ ?>
  <section class="content-with-sidebar padding-ten brand-color" style="overflow:auto;">
  <div class="container" style="min-height:calc(100vh - 166px);text-align:center">
    <h1>সকল বিভাগ</h1>
    <div class="list-group" style="padding-top:10%;">
      <?php foreach ($categories as $category) { ?>
        <a href="contents.php?id=<?php echo $category['id']; ?>" class="list-group-item list-group-item-action list-group-item-primary"><?php echo $category['bangla_name'];?></a>
      <?php } ?>

    </div>
  </div>
  </section>

<?php } elseif($session->language == 'Arabic'){ ?>
  <section class="content-with-sidebar padding-ten brand-color" style="overflow:auto;">
  <div class="container" style="min-height:calc(100vh - 166px);text-align:center">
    <h1>جميع الأقسام</h1>
    <div class="list-group" style="padding-top:10%;">
      <?php foreach ($categories as $category) { ?>
        <a href="contents.php?id=<?php echo $category['id']; ?>" class="list-group-item list-group-item-action list-group-item-primary"><?php echo $category['arabic_name'];?></a>
      <?php } ?>

    </div>
  </div>
  </section>


<?php } ?>






<?php require_once("layouts/footer.php"); ?>

<script type="text/javascript">
    document.getElementById("chooseLanguage").onchange = function() {langChange()};

    function langChange() {
      var lang = document.getElementById("chooseLanguage").value;

      var url = 'category_list.php';
      var form = $('<form action="' + url + '" method="post">' +
        '<input type="text" name="language" value="' + lang + '" />' +
        '</form>');
      $('body').append(form);
      form.submit();

    }
</script>
