
<?php require_once("includes/query_functions.php"); ?>

<?php require_once("layouts/header.php"); ?>


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

<section class="container p-t-3">
    <div class="row">
        <div class="col-lg-12">
            <h1>Bootstrap 4 Card Slider</h1>
        </div>
    </div>
</section>
<section class="carousel slide" data-ride="carousel" id="postsCarousel">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-md-right lead">
                <a class="btn btn-outline-secondary prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                <a class="btn btn-outline-secondary next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-md-right lead">
                <a class="btn btn-outline-secondary prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                <a class="btn btn-outline-secondary next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
    <div class="container p-t-0 m-t-2 carousel-inner">
        <div class="row row-equal carousel-item active m-t-0">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="http://i.imgur.com/EW5FgJM.png" alt="Carousel 1">
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="http://i.imgur.com/Hw7sWGU.png" alt="Carousel 2">
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="http://i.imgur.com/g27lAMl.png" alt="Carousel 3">
                    </div>

                </div>
            </div>
        </div>
        <div class="row row-equal carousel-item m-t-0">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="//visualhunt.com/photos/l/1/office-student-work-study.jpg" alt="Carousel 4">
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="//visualhunt.com/photos/l/1/working-woman-technology-computer.jpg" alt="Carousel 5">
                    </div>

                </div>
            </div>
            <div class="col-md-3 fadeIn wow">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="//visualhunt.com/photos/l/1/people-office-team-collaboration.jpg" alt="Carousel 6">
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
(function($) {
    "use strict";

    // manual carousel controls
    $('.next').click(function(){ $('.carousel').carousel('next');return false; });
    $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });

})(jQuery);
</script>
