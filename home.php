
<?php require_once("includes/query_functions.php"); ?>
<?php
	if(!isset($_POST['language'])){
		$session->set_language('Bangla');
	} else {
		$session->set_language($_POST['language']);
	}
	if(!isset($session->language)){
		$session->set_language('Bangla');
	}
?>
<?php
	$featuredEvents = find_featured_events($session->language);
	$featuredContents = find_featured_contents($session->language);
	$contentURL = "content.php?id=";



?>
<?php if($session->language == 'English'){require_once("layouts/header_english.php");} else{ require_once("layouts/header.php");} ?>

	<div class="container">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">

		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>


		  <div class="carousel-inner">
		    <div class="item active">
		      <img src="https://images.wallpaperscraft.com/image/city_buildings_street_161163_1920x1080.jpg">
		    </div>

		    <div class="item">
		      <img src="https://images.wallpaperscraft.com/image/fish_aquarium_dark_161162_1920x1080.jpg">
		    </div>

		    <div class="item">
		      <img src="https://images.wallpaperscraft.com/image/waterfall_landscape_forest_161160_1920x1080.jpg">
		    </div>
		  </div>


		  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>




	<section class="content-with-sidebar padding-ten brand-color">
		<div class="container">



			<div class="row">
				<div class="col-md-9 ">
					<h3><?php if($session->language == 'Bangla'){ echo "ফিচার প্রবন্ধ";}elseif($session->language == 'English'){ echo "Featured Event";}elseif($session->language == 'Arabic'){ echo "فعاليات مميزة";} ?> </h3>
					<div class="row visible-md visible-lg visible-xl" >
						<div class="col-md-6">
							<div>
								<h3 <?php if($session->language == 'Arabic'){echo "style='text-align:right;'";}?>><?php echo $featuredContents[0]['name']; ?></h3>
								<div>
									<?php echo substr($featuredContents[0]['content'],0,800); ?>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<a href="<?php echo $contentURL.$featuredContents[0]['id'];?>"><img src="<?php echo $featuredContents[0]['image_path']; ?>" style="width:360px; padding-left:20px"></a>

						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
						<div class="card-deck" style="padding-top:20px">
							<?php $countF = 0; ?>
							<?php foreach ($featuredContents as $featuredContent){ ?>
								<a href='<?php echo $contentURL.$featuredContent['id']; ?>' style="text-decoration: inherit; color: inherit;">
								<div class="card <?php if($countF == 0){ echo "hidden-md hidden-lg hidden-xl";}?>">
							    <img class="card-img-top" src="<?php echo $featuredContent['image_path'];?>" alt="Card image cap">
							    <div class="card-body">
							      <h5 class="card-title"><?php echo $featuredContent['name'];?></h5>
							      <p class="card-text"><?php echo substr($featuredContent['content'],0,250)." ....." ."<a href='$contentURL".$featuredContent['id']."'>read more</a>"  ;?></p>
							      <p class="card-text"><small class="text-muted"><?php echo $featuredContent['post_date'];?></small></p>
							    </div>
							  </div>
								</a>
							<?php $countF++; } ?>

						</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="container-fluid">
						<div id="eventCarousel" class="carousel slide" data-ride="carousel">



							<?php if($session->language == 'Arabic'){ echo "<h3 style=\"text-align:right\">"."الأحداث الأخيرة"."</h3>"; }elseif ($session->language == 'Bangla') { echo "<h3>"."সম্প্রতিক ইভেন্ট"."</h3>";} elseif($session->language == 'English') {echo "<h3>"."Recent Events"."</h3>";}?>
						  <div class="carousel-inner">
								<?php $countE=0; ?>
								<?php	foreach ($featuredEvents as $featuredEvent) {?>

									<div class="card item <?php if($countE==0){echo "active";} ?>" style="border:none;">
										<a href="event.php?id=<?php echo $featuredEvent['id']; ?>" style="text-decoration: inherit; color: inherit;">
										<div class="">
											<img class="card-img-top" src="<?php echo $featuredEvent['image_path'];?>" alt="Card image cap">

											<?php if($session->language == 'Arabic'){ ?>

																<div class="card-body" style="background-color:#d8cda1; padding:1.25rem 0rem 1.25rem">
																	<h4 style="text-align:right;" class="card-title">اسم: <?php echo $featuredEvent['name'];?></h4>
																	<p style="text-align:right;" class="card-text"><?php echo $featuredEvent['short_description'];?></p>
																	<p style="text-align:right;" class="card-text">الوقت و التاريخ: <?php echo time_eng_to_arabic($featuredEvent['start_time']);?></p>
																	<p style="text-align:right;" class="card-text">مكان: <?php echo $featuredEvent['place'];?></p>
																</div>

											<?php } elseif ($session->language == 'Bangla') { ?>
																<div class="card-body" style="background-color:#d8cda1; padding:1.25rem 0rem 1.25rem">
																	<h4 class="card-title">নাম: <?php echo $featuredEvent['name'];?></h4>
																	<p class="card-text"><?php echo $featuredEvent['short_description'];?></p>
																	<p class="card-text">সময় এবং তারিখ: <?php echo time_eng_to_bengali($featuredEvent['start_time']);?></p>
																	<p class="card-text">স্থান: <?php echo $featuredEvent['place'];?></p>
																</div>

												<?php } elseif($session->language == 'English') { ?>
																<div class="card-body" style="background-color:#d8cda1; padding:1.25rem 0rem 1.25rem">
														      <h4 class="card-title">Name: <?php echo $featuredEvent['name'];?></h4>
														      <p class="card-text"><?php echo $featuredEvent['short_description'];?></p>
														      <p class="card-text">Time and Date: <?php echo date('d M, D, g:i:A', strtotime($featuredEvent['start_time']));?></p>
																	<p class="card-text">Venue: <?php echo $featuredEvent['place'];?></p>
														    </div>
												<?php } ?>



										</div>
								    </a>
								  </div>

									<?php $countE++; } ?>


						  </div>


						  <a class="left carousel-control" href="#eventCarousel" data-slide="prev" style="background-image: none;">
						    <span class="glyphicon glyphicon-chevron-left"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#eventCarousel" data-slide="next" style="background-image: none;">
						    <span class="glyphicon glyphicon-chevron-right"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
					</div>
					<div class="container">
						<a href="#">view all</a>
					</div>

				</div>


			<div class="row">
				<div class="col-md-9">

					<!-- <ul>
						<li> -->

							<div>

							</div>
						<!-- </li>

					</ul> -->
				</div>

			</div>
		</div>
	</section>

	<section class="content-without-sidebar padding-ten">
		<div class="container">
			<div class="row">
				<div class="col-md-3">

				</div>
				<div class="col-md-3">

				</div>
				<div class="col-md-3">

				</div>
				<div class="col-md-3">

				</div>
			</div>
		</div>
	</section>

	<div class="container">
		<h3> ফিচার প্রবন্ধ </h3>
		<div class="row">
			<div class="col-md-9">
				<div class="card-deck" style="padding-top:20px">
					<div class="card">
						<img class="card-img-top" src="https://paloimages.prothom-alo.com/contents/cache/images/640x358x1/uploads/media/2020/02/22/5416a663c641068ff8700688ae4622c7-5e50b8a518f67.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>
					</div>
					<div class="card">
						<img class="card-img-top" src="https://paloimages.prothom-alo.com/contents/cache/images/640x607x1/uploads/media/2020/02/22/8fe9bf01be5b4bfb479a0b0bfcc8c069-5e50c2f734fab.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>
					</div>
					<div class="card">
						<img class="card-img-top" src="https://paloimages.prothom-alo.com/contents/cache/images/640x607x1/uploads/media/2020/02/22/8fe9bf01be5b4bfb479a0b0bfcc8c069-5e50c2f734fab.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">

			</div>
		</div>
	</div>

	<section class="content-without-sidebar liflet padding-ten announce">
		<!-- <div class="container">
			<div class="row">
				<div class="col-md-12"> -->
					<!-- <img src="assets/images/introduction-1.jpg" class="img-responsive"> -->
				<!-- </div>
			</div>
		</div> -->
	</section>

	<section class="content-with-sidebar category-wise-news padding-ten">
		<div class="container">
			<div class="row">
				<div class="col-md-9">

				</div>
				<div class="col-md-3">

				</div>
			</div>
		</div>
	</section>

	<footer class="footer padding-ten brand-color">
		<div class="container">
			<div class="row main-footer">
				<div class="col-md-4">
					<!-- <ul class="footer-links">
						<li> <a href="#"> ইতিহাস, পরিচিতি ও আদর্শ </a> </li>
						<li> <a href="#"> লক্ষ্য, উদ্দেশ্য ও কর্মসূচি </a> </li>
						<li> <a href="#"> কর্মপদ্ধতি </a> </li>
						<li> <a href="#"> নীতি নির্ধারণী ঘোষণা </a> </li>

					</ul>
					<hr/> -->
					<h5>বাংলাদেশ খেলাফত আন্দোলন</h5>
					<hr/>
					<address>
						কেন্দ্রীয় কার্যালয়: দারুল খেলাফত, ৩১৪/২ কেল্লার মোড়, লালবাগ, ঢাকা-১২১১ বাংলাদেশ। <br/>
						ফোন: ০২-৯৬৩০১০২, ০১৭৮৩৩৩৯৪৭৪ <br/>
						ইমেইল: khelafatandolon01@gmail.com
					</address>
				</div>
				<div class="col-md-4">
					<div class="fb-page" data-href="https://www.facebook.com/bka.org/"  data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/bka.org/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/bka.org/">Bangladesh Khelafat Andolon</a></blockquote></div>
				</div>
				<div class="col-md-4">
					<a class="twitter-timeline" data-height="214" href="https://twitter.com/BkaOrg?ref_src=twsrc%5Etfw">Tweets by Bangladesh Khelafat Andolon</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
			</div>
		</div>
	</footer>

	<script type="text/javascript">
			document.getElementById("chooseLanguage").onchange = function() {langChange()};

			function langChange() {
				var lang = document.getElementById("chooseLanguage").value;
				console.log(document.getElementById("chooseLanguage").value);

				var url = 'home.php';
				var form = $('<form action="' + url + '" method="post">' +
				  '<input type="text" name="language" value="' + lang + '" />' +
				  '</form>');
				$('body').append(form);
				form.submit();

			}
	</script>

	<?php require_once("layouts/footer.php"); ?>
