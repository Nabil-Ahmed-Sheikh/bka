<?php

	$languages = array('Bangla','English','Arabic' );
	if(isset($_POST['language'])){
		$session->set_language($_POST['language']);
	}
	if(!isset($session->language)){
		$session->set_language('Bangla');
	}


?>
<?php
$menu_list = find_all_menu();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Bangladesh Khelafat Andolon</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/site.css">
	<link href="assets/fontawesome/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">



	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>
	<header class="header">
		<div class="container">
			<div class="preheader row">
				<div class="col-lg-7">
				</div>
				<div class="col-lg-5">
					<ul class="social">

						<select id="chooseLanguage">
							<option value=<?php echo $session->language;?> selected><?php if($session->language == 'Bangla') { echo "বাংলা";} elseif ($session->language == 'Arabic'){echo "عربى";} else { echo "English";}?></option>
							<?php for($i=0; $i < count($languages); $i++) { if($languages[$i] != $session->language ){?>
						    <option value=<?php echo $languages[$i]; ?>>
									<?php if($languages[$i] == 'Bangla') { echo "বাংলা";} elseif ($languages[$i] == 'Arabic'){echo "عربى";} else { echo "English";} ?>
								</option>
							<?php }}?>
						</select>

						<li> <a href="https://www.facebook.com/bka.org/" target="_blank"> <i class="fab fa-facebook"></i> </a> </li>
						<li> <a href="https://twitter.com/BkaOrg"> <i class="fab fa-twitter" target="_blank"></i> </a> </li>
						<li> <a href="https://www.linkedin.com/in/bangladesh-khelafat-3442a1190/" target="_blank"> <i class="fab fa-linkedin" target="_blank"></i> </a> </li>
						<li> <a href="tel:+88 017 112 63452">Cell.: +88 017 112 63452</a> </li>
						<li> <a href="join.php">সদস্য হোন</a> </li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<section class="menu-bar">
		<div class="container">
					<nav class="navbar navbar-expand-lg navbar-light">

						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>
						<div class="collapse navbar-collapse" id="navbarNav">
							<ul class="nav navbar-nav navbar-right">


                <?php foreach ($menu_list as $menu) {?>
                  <?php if(menu_has_children($menu['id'])) {?>
                    <li class="nav-item dropdown">
    					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    					          <?php echo $menu['bangla_name']; ?>
    					        </a>
                      <?php $dropdown_list = menu_dropdown_children($menu['id']);?>
    					        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <?php foreach ($dropdown_list as $dropdown_menu) {  ?>
    					          <a class="dropdown-item" href="<?php echo $dropdown_menu['link']; ?>"><?php echo $dropdown_menu['bangla_name']; ?></a>
                        <?php } ?>
    					        </div>
    					      </li>
                  <?php } else{?>
                  <li class="nav-item">
  					        <a class="nav-link" href="/"><?php echo $menu['bangla_name'];?><span class="sr-only">(current)</span></a>
  					      </li>
                <?php }} ?>


					      </li>
					    </ul>
						</div>
					 </nav>
		</div>
	</section>
