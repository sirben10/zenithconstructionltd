
<style>
  /* testimonial Section */
  .testimonial-section {
    position: relative;
    background: url('assets/img/1024px-Road_construction_in_progress.jpeg') no-repeat center center/cover;
    /* transform: skewY(-1deg); */
    height: auto;
    /* margin-top: 50px; */
    overflow: hidden;
  }

  /* Overlay */
  .testimonial-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 54, 0, 0.9);
    /* adjust opacity */
    z-index: 1;
  }

  /* Content inside section */
  .testimonial-content {
    position: relative;
    z-index: 2;
    text-align: center;
    color: #fff;
  }

  .testimonial-content h1 {
    font-size: 2.5em;
    margin-bottom: 10px;
  }

  .testimonial-content p {
    font-size: 16px;
    line-height: inherit;
    opacity: 0.9;
  }

  @media (max-width: 768px) {
    .testimonial-section {

      height: 100%;
    }

    .testimonial-content h1 {
      font-size: 1.8rem;
    }

    .testimonial-content p {
      font-size: 1.3rem;
      text-align: left !important;
    }
  }

 
</style>
                  <div class="row-testimonials testimonial-section parallax-2">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12">
                          <div
                            class="zenith-spacer clearfix"
                            data-desktop="80"
                            data-mobile="60"
                            data-smobile="60"></div>
                          <div
                            class="zenith-carousel-box has-arrows arrow-center arrow-circle offset-v-24 clearfix"
                            data-gap="30"
                            data-column="1"
                            data-column2="1"
                            data-column3="1"
                            data-auto="true">
                            <div class="owl-carousel owl-theme">
                              <!-- /.zenith-testimonials -->
                              <?php foreach ($testimonials as $testimonial): ?>
                                <div
                                  class="zenith-testimonials style-1 max-width-70 align-center has-width w100 circle border-solid clearfix testimonial-content">
                                  <div class="testimonial-item">
                                    <div class="inner">
                                      <div class="icon-wrap">
                                        <i class="fa fa-quote-left"></i>
                                      </div>
                                      <blockquote class="text">
                                        <p>
                                          “
                                          <?php echo $testimonial['testimony']; ?>
                                          ”
                                        </p>
                                        <div
                                          class="sep has-width w80 accent-bg clearfix"></div>
                                        <h3 class="name"><?php echo $testimonial['clientName']; ?></h3>
                                        <div
                                          class="sep has-width w80 accent-bg clearfix"></div>
                                        <h6 class="text-white mt-3"><?php echo $testimonial['position'] . ' - ' . $testimonial['companyName']; ?></h6>
                                      </blockquote>
                                    </div>
                                  </div>
                                </div>
                              <?php endforeach; ?>
                              <!-- /.zenith-testimonials -->
                            </div>
                          </div>
                          <!-- /.zenith-carousel-box -->
                          <div
                            class="zenith-spacer clearfix"
                            data-desktop="68"
                            data-mobile="60"
                            data-smobile="60"></div>
                        </div>
                        <!-- /.col-md-12 -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.container -->
                  </div>