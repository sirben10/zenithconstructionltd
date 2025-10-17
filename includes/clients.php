 <?php
    include_once 'functions.php';
    global $dbh;
    $clients = fetchAllPartners($dbh);
    // var_dump($clients); exit;
    ?>


 <div class="row-partner">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="zenith-spacer clearfix" data-desktop="83" data-mobile="60" data-smobile="60"></div>
                 <div class="zenith-carousel-box clearfix" data-gap="5" data-column="5" data-column2="3" data-column3="2" data-auto="true">
                     <div class="owl-carousel owl-theme">
                         <?php

                            foreach ($clients as $client) {
                            ?>
                             <div class="zenith-partner style-1 align-center clearfix">
                                 <div class="partner-item">
                                     <div class="inner">
                                         <div class="thumb text-center">
                                             <img src="partnersphotos/<?php echo $client['partnerLogo']; ?>" alt="<?php echo $client['companyName']; ?>" class="partner-default">
                                             <img src="partnersphotos/<?php echo $client['partnerLogo']; ?>" alt="<?php echo $client['companyName']; ?>" class="partner-color">
                                         </div>
                                     </div>
                                 </div>
                             </div><!-- /themesflat-partner -->
                         <?php } ?>
                     </div>
                 </div><!-- /.themesflat-carousel-box -->
                 <div class="themesflat-spacer clearfix" data-desktop="66" data-mobile="60" data-smobile="60"></div>
             </div><!-- /.col-md-12 -->
         </div><!-- /.row -->
     </div><!-- /.container -->
 </div>

