<footer id="footer" class="clearfix">
          <div id="footer-widgets" class="container">
            <div class="zenith-row gutter-30">
              <div class="col span_1_of_4">
                <div class="widget widget_text">
                  <div class="textwidget">
                    <p>
                      <img
                        src="<?php if (!empty($_GET['p']) && $_GET['p'] == 'services') {?>../sitelogo/<?php echo $rows['sitelogo'] ?>
                        <?php } else{?>sitelogo/<?php echo $rows['sitelogo'] ?><?php }?>"
                        alt="<?php echo $rows['sitetitle'] ?>"
                        width="70"
                        height="34"
                      />
                    </p>

                    <p class="margin-bottom-15">
                      We have over 25 years of experience in construction.
                       We have successfully completed projects in numerous states of Nigeria
                    </p>

                    <ul>
                      <li>
                        <div class="inner">
                          <span class="fa fa-map-marker"></span>
                          <span class="text"
                            >
                            <span class="sl"><?php echo $rows['Address'].', Cross River State, Nigeria' ?></span></span
                          >
                        </div>
                      </li>

                      <li>
                        <div class="inner">
                          <span class="fa fa-phone"></span>
                          <span class="text">CALL US : <a class="text-white" href="tel:<?php echo $rows['ContactNo']?>"><?php echo $rows['ContactNo']?></a> | <a class="text-white" href="https://wa.me/<?php echo $rows['ContactNo']?>"><?php echo $rows['OtherNo']?></a></span>
                        </div>
                      </li>

                      <li class="margin-top-7">
                        <div class="inner">
                          <span class="font-size-14 fa fa-envelope"></span>
                          <span class="text"><a class="text-white" href="mailto:<?php echo $rows['EmailId']?>"><?php echo $rows['EmailId']?></a></span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- /.widget_text -->
                <div
                  class="zenith-spacer clearfix"
                  data-desktop="0"
                  data-mobile="0"
                  data-smobile="35"
                ></div>
              </div>
              <!-- /.col -->

              <div class="col span_1_of_4">
                <div
                  class="zenith-spacer clearfix"
                  data-desktop="0"
                  data-mobile="35"
                  data-smobile="35"
                ></div>

                <div class="widget widget_tags">
                  <h2 class="widget-title margin-bottom-30">
                    <span>USEFUL LINKS</span>
                  </h2>
                  <div class="tags-list">
                    <a href="about?p=aboutus">WHO WE ARE</a>
                    <a href="#">QUALITY & SAFETY</a>
                    <a href="#">PLANTS AND EQUIPMENTS</a>
                    <a href="#">SERVICES</a>
                    <a href="#">PROJETS</a>
                    <a href="#">CONTACT</a>
                    <!-- <a href="#">Resort</a>
                    <a href="#">Commercial</a> -->
                  </div>
                </div>
              </div>
              <!-- /.col -->

              <div class="col span_1_of_3">
                <div
                  class="zenith-spacer clearfix"
                  data-desktop="0"
                  data-mobile="35"
                  data-smobile="35"
                ></div>


                <!-- /.widget_instagram -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.zenith-row -->
          </div>
          <!-- /#footer-widgets -->
        </footer>
        <!-- /#footer -->

        <!-- Bottom -->
        <div id="bottom" class="clearfix has-spacer">
          <div id="bottom-bar-inner" class="container">
            <div class="bottom-bar-inner-wrap">
              <div class="bottom-bar-content">
                <div id="copyright">
                  &copy; <script>document.write(new Date().getFullYear());</script>
                  <span class="text"
                    ><a href="/" class="text-accent"
                      >Zenith Construction Limited</a
                    ></span
                  >
                </div>
              </div>
              <!-- /.bottom-bar-content -->

              <div class="bottom-bar-menu">
                <span class="text">Follow us:</span>
                    <span class="icons">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-instagram"></i></a>
                    </span>
              </div>
              <!-- /.bottom-bar-menu -->
            </div>
            <!-- /.bottom-bar-inner-wrap -->
          </div>
          <!-- /#bottom-bar-inner -->
        </div>
        <!-- /#bottom -->
      </div>
      <!-- /#page -->
    </div>
    <!-- /#wrapper -->