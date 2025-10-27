
 <div id="site-logo" class="clearfix">
                  <div id="site-log-inner">
                    <a href="index" rel="home" class="main-logo">
                      <img
                        src="<?php if (!empty($_GET['p']) && ($_GET['p'] == 'services' || $_GET['p'] == 'projects')) {?>../sitelogo/<?php echo $rows['sitelogo']?>
                        <?php }else{?>sitelogo/<?php echo $rows['sitelogo'] ?> <?php } ?>" class="img-responsive"
                        alt="Zenith Construction"
                        width="186"
                        height="39"
                        data-retina="<?php if (!empty($_GET['p']) && ($_GET['p'] == 'services' || $_GET['p'] == 'projects')) {?>../sitelogo/<?php echo $rows['sitelogo'] ?>
                           <?php }else{?>sitelogo/<?php echo $rows['sitelogo'] ?> <?php } ?>"
                        data-width="186"
                        data-height="39"
                      />
                    </a>
                  </div>
                </div>