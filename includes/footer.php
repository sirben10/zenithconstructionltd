
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

    <!-- 🧁 Cookie Consent Banner -->
<div id="cookieConsent" class="cookie-consent">
  <div class="cookie-container">
    <p>
      🍪 We use cookies to improve your browsing experience, analyze traffic, and personalize content. 
      By continuing to use our site, you agree to our 
      <a href="/privacy-policy.html" target="_blank">Privacy Policy</a>.
    </p>
    <div class="cookie-buttons">
      <button id="acceptCookies">Accept All</button>
      <button id="rejectCookies">Reject</button>
    </div>
  </div>
</div>

<style>
  .cookie-consent {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background: rgba(15, 15, 15, 0.95);
    color: #fff;
    font-family: "Segoe UI", sans-serif;
    font-size: 15px;
    z-index: 9999;
    display: none;
    box-shadow: 0 -2px 8px rgba(0,0,0,0.3);
  }

  .cookie-container {
    max-width: 900px;
    margin: 0 auto;
    padding: 16px 20px;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
  }

  .cookie-container p {
    flex: 1 1 70%;
    margin: 0;
    line-height: 1.5;
  }

  .cookie-container a {
    color: #00bfff;
    text-decoration: underline;
  }

  .cookie-buttons {
    display: flex;
    gap: 10px;
  }

  .cookie-buttons button {
    background: #00bfff;
    border: none;
    padding: 8px 18px;
    border-radius: 5px;
    color: #fff;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .cookie-buttons button:hover {
    background: #0099cc;
  }

  .cookie-buttons #rejectCookies {
    background: #555;
  }

  .cookie-buttons #rejectCookies:hover {
    background: #444;
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const banner = document.getElementById("cookieConsent");
    const acceptBtn = document.getElementById("acceptCookies");
    const rejectBtn = document.getElementById("rejectCookies");

    // Helper to set cookies
    function setCookie(name, value, days) {
      const date = new Date();
      date.setTime(date.getTime() + (days*24*60*60*1000));
      const expires = "expires=" + date.toUTCString();
      document.cookie = `${name}=${value}; ${expires}; path=/; SameSite=Lax`;
    }

    // Helper to get cookies
    function getCookie(name) {
      const value = `; ${document.cookie}`;
      const parts = value.split(`; ${name}=`);
      if (parts.length === 2) return parts.pop().split(';').shift();
    }

    const userConsent = getCookie("site_consent");

    if (!userConsent) {
      banner.style.display = "block";
    } else {
      if (userConsent === "accepted") {
        enableCookies();
      }
    }

    acceptBtn.addEventListener("click", function () {
      setCookie("site_consent", "accepted", 180);
      banner.style.display = "none";
      enableCookies();
    });

    rejectBtn.addEventListener("click", function () {
      setCookie("site_consent", "rejected", 180);
      banner.style.display = "none";
    });

    // Example of enabling optional cookies/scripts after consent
    function enableCookies() {
      // Example: load Google Analytics only if consented
      const script = document.createElement("script");
      script.src = "https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX";
      script.async = true;
      document.head.appendChild(script);

      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-XXXXXXXXXX');
    }
  });
</script>

