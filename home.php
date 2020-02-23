
<?php require_once("includes/query_functions.php"); ?>
<?php
	$featuredEvents = find_featured_events();



?>

<?php require_once("layouts/header.php"); ?>

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
				<div class="col-md-9">
					<h3> ফিচার প্রবন্ধ </h3>
					<div class="row visible-md visible-lg visible-xl" >
						<div class="col-md-6">
							<div>
								<h3>খেলাফত পদ্ধতির সরকার দেশ ও জাতির জন্য কি করবে </h3>
								<div>
									<p>আল্লাহ তা‘আলার সার্বভৌমত্বের ঘোষণা দেবে এবং কুরআন ও সুন্নাহর বিধানের পরিপূর্ণ বাস্তবায়ন করবে, তথা খেলাফত পদ্ধতির শাসন ব্যবস্থা চালু করবে। </p>

									<p>বিশ্ববাসীর নিকট মহান আল্লাহ তা‘আলার হুকুম-আহকাম যথাযথভাবে পৌঁছাবে। </p>

									<p>রাষ্ট্রের মুসলিম-অমুসলিম সকল নাগরিকের জান-মাল, ইজ্জত, আবরু সংরক্ষণের নিশ্চয়তা বিধান করবে। সকল নাগরিকের মৌলিক চাহিদা তথা-খাদ্য, বস্ত্র, বাসস্থান, শিক্ষা, চিকিৎসা ও নিরাপত্তা নিশ্চিত করবে।</p>

								</div>
							</div>
						</div>
						<div class="col-md-3">
							<img src="https://paloimages.prothom-alo.com/contents/cache/images/640x425x1/uploads/media/2020/02/23/8051164c815b44c64fc491c2ccf3b165-5e5212663df4e.jpg" style="width:360px; padding-left:20px">

						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
						<div class="card-deck" style="padding-top:20px">
							<div class="card hidden-md hidden-lg hidden-xl">
						    <img class="card-img-top" src="https://paloimages.prothom-alo.com/contents/cache/images/640x358x1/uploads/media/2020/02/22/5416a663c641068ff8700688ae4622c7-5e50b8a518f67.jpg" alt="Card image cap">
						    <div class="card-body">
						      <h5 class="card-title">Card title</h5>
						      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						    </div>
						  </div>
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
					</div>
				</div>
				<div class="col-md-3">
					<div class="container-fluid">
						<div id="eventCarousel" class="carousel slide" data-ride="carousel">




						  <div class="carousel-inner">
								<?php $countE=0; ?>
								<?php	foreach ($featuredEvents as $featuredEvent) {?>
										<div class="item <?php if($countE==0){echo "active";} ?>">
											<h3>সাম্প্রতিক ইভেন্ট</h3>
											<h5><?php echo $featuredEvent['name'] ?></h5>
											<img src="<?php echo $featuredEvent['image_path'] ?>" class="img-responsive"/>
											<br>
											<p><?php echo $featuredEvent['short_description'] ?></p>
											<p>তারিখ ও সময়: <?php echo date('d M, D, g.i A',strtotime($featuredEvent['start_time'])) ?></p>
											<p>স্থান: <?php echo time_eng_to_arabic($featuredEvent['start_time'])  ?></p>
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

	<?php require_once("layouts/footer.php"); ?>
