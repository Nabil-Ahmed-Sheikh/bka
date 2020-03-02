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
  if(isset($_GET['id'])){
    if($_GET['id'] != ''){
			$category = find_category_by_id($_GET['id'])[0];
      $contents = find_all_contents_of_category($_GET['id'],$session->language);
    } else {
      redirect_to('category_list.php');
    }
  } else {
    redirect_to('category_list.php');
  }


?>

<?php if($session->language == 'English'){require_once("layouts/header_english.php");} elseif($session->language == 'Arabic'){ require_once("layouts/header_arabic.php");} else{require_once("layouts/header.php");} ?>

<section class="content-with-sidebar padding-ten brand-color" style="overflow:auto;">
  <div class="" style="min-height:calc(100vh - 166px);">
    <div class="container">

			<?php if($session->language == 'English'){?>
				<ol class="breadcrumb">
					<li><a href="home.php">Home</a></li>
					<li class="active"><?php echo $category['name'];?></li>
				</ol>
				<h1><?php echo $category['name'];?></h1>
			<?php	} elseif ($session->language == 'Arabic'){ ?>
				<ol class="breadcrumb">
					<li><a href="home.php">الصفحة الرئيسية</a></li>
					<li class="active"><?php echo $category['arabic_name'];?></li>
				</ol>
				<h1><?php echo $category['arabic_name'];?></h1>
			<?php } else{ ?>
				<ol class="breadcrumb">
					<li><a href="home.php">মূল পাতা</a></li>
					<li class="active"><?php echo $category['bangla_name'];?></li>
				</ol>
				<h1><?php echo $category['bangla_name'];?></h1>
			<?php	}?>
      <?php foreach ($contents as $content) { ?>

        <div class="card" style="padding:15px; background-color:#D8CDA1; border:none; ">
        <div class="row ">
          <div class="col-md-4">
              <a href="content.php?id=<?php echo $content['id'];?>">
                <img src="<?php echo $content['image_path']; ?>" onerror="this.onerror=null; this.src='assets/images/default.jpg'" class="w-100 rounded">
              </a>
            </div>
            <div class="col-md-8 px-3" >
              <div class="card-block px-3">
                <h4 class="card-title"><?php echo $content['name']; ?></h4>
                <p class="card-text"><?php echo substr($content['content'],0,800)."...."; ?></p>

                <a href="content.php?id=<?php echo $content['id'];?>" ><?php if($session->language == 'English'){echo "read more";} elseif($session->language == 'Arabic'){ echo "قراءة المزيد";} else{echo "আরও পড়ুন";} ?></a>
              </div>
            </div>

          </div>
      </div>

      <?php } ?>

      <input type="text" id="id" value="<?php echo $_GET['id']; ?>" hidden>
    </div>
  </div>
</section>



<?php require_once("layouts/footer.php"); ?>

<script type="text/javascript">
    document.getElementById("chooseLanguage").onchange = function() {langChange()};

    function langChange() {
      var lang = document.getElementById("chooseLanguage").value;
      var id = document.getElementById("id").value;

      var url = 'contents.php?id='+id;
      var form = $('<form action="' + url + '" method="post">' +
        '<input type="text" name="language" value="' + lang + '" />' +
        '</form>');
      $('body').append(form);
      form.submit();

    }
</script>
