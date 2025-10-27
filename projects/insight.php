      <?php
        $projectSlug = $_GET['s'];
        //   echo $projectSlug; exit;
        $allprojectssql = "SELECT * from  tblprojects p JOIN tblpartners pt ON pt.partnerID = p.client
    where projectSlug = '$projectSlug'";
        $query = $dbh->prepare($allprojectssql);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        $projectID = $result['projectID'];
        // var_dump($projectID); exit;


        $sql = "SELECT * from  tblprojectgallery g JOIN tblprojects p on p.projectID = g.projectID
    where g.projectID = {$result['projectID']}";
        $query = $dbh->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);

        // FETCH RELATED PROJECTS


          $relatedProjects = "SELECT p.projectTitle,p.previewPhoto, p.projectSlug, GROUP_CONCAT(s.serviceName SEPARATOR ' | ') AS services
FROM tblprojects p
LEFT JOIN tblprojectservices ps ON p.projectID = ps.projectID
LEFT JOIN tblservices s ON ps.serviceID = s.serviceID  
where p.projectID NOT IN($projectID)
GROUP BY p.projectID";
        $query = $dbh->prepare($relatedProjects);
        $query->execute();
        $projects= $query->fetchAll(PDO::FETCH_ASSOC);
        ?>
      <title><?php echo ucwords($result['projectTitle']) . ' | ' . $rows['sitetitle'] ?> </title>

      <div id="featured-title" class="featured-title clearfix">
          <div id="featured-title-inner" class="container clearfix">
              <div class="featured-title-inner-wrap">
                  <div id="breadcrumbs">
                      <div class="breadcrumbs-inner">
                          <div class="breadcrumb-trail">
                              <a href="index.html" class="trail-begin">Home</a>
                              <span class="sep">|</span>
                              <span class="trail-end">Projects</span>
                          </div>
                      </div>
                  </div>
                  <div class="featured-title-heading-wrap">
                      <h1 class="feautured-title-heading">
                          <?php echo htmlentities(ucwords($result['projectTitle'])) ?>
                      </h1>
                  </div>
              </div><!-- /.featured-title-inner-wrap -->
          </div><!-- /#featured-title-inner -->
      </div>
      <!-- End Featured Title -->
      <!-- Main Content FOR PROJECT DETAILS -->
      <div id="main-content" class="site-main clearfix">
          <div id="content-wrap">
              <div id="site-content" class="site-content clearfix">
                  <div id="inner-content" class="inner-content-wrap">
                      <div class="page-content">
                          <!-- PROJECT DETAIL -->
                          <div class="row-project-detail">
                              <div class="container">
                                  <div class="row">

                                      <div class="col-md-12">
                                          <div class="zenith-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                                          <div class="detail-inner-wrap">
                                              <div class="detail-info">
                                                  <div class="content-info">
                                                      <div class="zenith-headings style-2 clearfix">
                                                          <h2 class="heading line-height-28"><?php echo htmlentities(strtoupper($result['projectTitle'])) ?></h2>
                                                          <div class="sep has-width w80 accent-bg clearfix">
                                                          </div>
                                                      </div>
                                                      <ul class="list-info has-icon icon-left">
                                                          <li><span class="text">Date Awarded <span class="icon"><i class="fa fa-calendar"></i></span></span><span class="right"><?php echo htmlentities(date('F, Y', strtotime($result['dateAwarded']))) ?></span></li>
                                                          <li class="mb-lg-5"><span class="text">Client <span class="icon"><i class="fa fa-user"></i></span></span><span class="right"><img src="../partnersphotos/<?php echo $result['partnerLogo'] ?>" height="60px" width="80px" alt=""></span></li>
                                                          <?php if ($result['projectStatus'] == 'Completed') { ?>
                                                              <li><span class="text">Project Status: <span class="icon"><i class="fa fa-folder-open"></i></span></span><span class="right"><?php echo htmlentities($result['projectStatus']) ?></span></li>
                                                              <li><span class="text">Year completed <span class="icon"><i class="fa fa-calendar"></i></span></span><span class="right"><?php echo htmlentities(date('F, Y', strtotime($result['dateCompleted']))) ?></span></li>
                                                          <?php } else { ?>
                                                              <li><span class="text">Project Status: <span class="icon"><i class="fa fa-folder-open"></i></span></span><span class="right"><?php echo htmlentities($result['projectStatus']) ?></span></li>
                                                          <?php } ?>
                                                          <li><span class="text">Project Manager: <span class="icon"><i class="fa fa-user"></i></span></span><span class="right"><?php echo htmlentities($result['ProjectManager']) ?></< /span>
                                                          </li>
                                                          <!-- <li><span class="text">Tag <span class="icon"><i class="fa fa-tag"></i></span></span><span class="right"><a href="#">Building</a> / <a href="#">Green house</a></span></li> -->
                                                      </ul>
                                                  </div><!-- /.content-info -->

                                                  <div class="zenith-spacer clearfix" data-desktop="46" data-mobile="35" data-smobile="35"></div>

                                                  <?php if (!empty($result['projectReport'])) { ?>
                                                      <div class="content-info info-brochures">
                                                          <div class="zenith-headings style-2 clearfix">
                                                              <h2 class="heading line-height-62">BROCHURES</h2>
                                                              <div class="sep has-width w60 accent-bg clearfix">
                                                              </div>
                                                          </div>
                                                          <div class="zenith-spacer clearfix" data-desktop="34" data-mobile="35" data-smobile="35"></div>
                                                          <div class="button-wrap has-icon icon-left size-14 pf21">
                                                              <a href="../projectreports/<?php echo $result['projectReport'] ?>" class="zenith-button font-default bg-light-white w100" target="_blank"><span>Brochures.PDF <span class="icon"><i class="fa fa-file-pdf-o"></i></span></span></a>
                                                          </div>
                                                          <!-- <div class="button-wrap has-icon icon-left size-14 pf21">
                                                      <a href="#" class="zenith-button font-default bg-light-white w100"><span>Brochures.DOC <span class="icon"><i class="fa fa-file-word-o"></i></span></span></a>
                                                  </div> -->
                                                      </div>
                                                  <?php } ?>
                                              </div>
                                              <div class="detail-gallery">
                                                  <div class="zenith-spacer clearfix" data-desktop="21" data-mobile="21" data-smobile="21"></div>
                                                  <div class="zenith-gallery style-2 has-arrows arrow-center arrow-circle offset-v-82 has-thumb w185 clearfix" data-gap="0" data-column="1" data-column2="1" data-column3="1" data-auto="false">
                                                      <div class="owl-carousel owl-theme">
                                                        <?php 
                                                        foreach($results as $row){?>
                                                          <div class="gallery-item">
                                                              <div class="inner">
                                                                  <div class="thumb">
                                                                      <img src="../projectphotos/<?php echo $row['photo'] ?>" alt="Image">
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <?php } ?>
                                                      </div>
                                                  </div><!-- /.zenith-cousel-box -->
                                                  <div class="zenith-spacer clearfix" data-desktop="40" data-mobile="40" data-smobile="40"></div>
                                                  <!-- <div class="flat-content-wrap style-3 clearfix">
                                                      <h5 class="title">PROJECT DESCRIPTION</h5>
                                                      <div class="sep has-width w60 accent-bg margin-top-18 clearfix"></div>
                                                      <p class="margin-top-28">The ten-storey, 325,000 SF Krembil Discovery Centre provides the Toronto Western Hospital with a new research and rehabilitation facility. The Integrated Project Delivery contract included the base building core and shell (and associated functional space), interior fit-up of two floors of the rehab solutions space, two floors of wet labs, a single floor vivarium and the associated interstitial floor</p>
                                                      <p>From November 2013 to April 2014, EllisDon was awarded an additional Lump Sum contract for $5 million. This additional scope of work included a lab fit- up on the fourth level of the Krembil Discovery Centre.</p>
                                                  </div> -->
                                              </div>
                                          </div>
                                          <div class="zenith-spacer clearfix" data-desktop="58" data-mobile="60" data-smobile="60"></div>
                                      </div>
                                  </div><!-- /.row -->
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="zenith-lines style-1 line-full line-solid clearfix"><span class="line"></span></div>
                                          <div class="zenith-spacer clearfix" data-desktop="46" data-mobile="35" data-smobile="35"></div>
                                          <div class="zenith-headings style-2 clearfix">
                                              <h2 class="heading">RELATED PROJECTS</h2>
                                              <div class="sep has-width w80 accent-bg margin-top-3 clearfix"></div>
                                          </div><!-- /.zenith-heading -->
                                          <div class="zenith-spacer clearfix" data-desktop="35" data-mobile="35" data-smobile="35"></div>
                                          <div class="zenith-carousel-box data-effect has-arrows arrow-top arrow75 arrow-circle arrow-style-2 clearfix" data-gap="30" data-column="3" data-column2="2" data-column3="1" data-auto="false">
                                              <div class="owl-carousel owl-theme">
                                                <?php foreach($projects as $project){?>
                                                  <div class="zenith-project style-1 clearfix">
                                                      <div class="project-item">
                                                          <div class="inner">
                                                              <div class="thumb data-effect-item has-effect-icon w40 offset-v-43 offset-h-46">
                                                                <div style="height: 200px;">
                                                                  <img src="../projectphotos/<?php echo $project['previewPhoto']; ?>" alt="Image" height="auto">
                                                                  </div>
                                                                  <div class="text-wrap text-center">
                                                                      <h5 class="heading"><a href="?p=projects&s=<?php echo $project['projectSlug']; ?>"><?php echo htmlentities(ucwords($project['projectTitle'])) ?></a></h5>
                                                                      <div class="elm-meta">
                                                                           <span><a><?php echo $project['services']; ?></a></span>
                                                                      </div>
                                                                  </div>
                                                                  <!-- <div class="elm-link">
                                                                      <a href="#" class="icon-1 icon-search"></a>
                                                                      <a href="#" class="icon-1"></a>
                                                                  </div> -->
                                                                  <div class="overlay-effect bg-color-3"></div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <?php } ?>
                                                  <!-- /.zenith-project -->
                                                  
                                              </div>
                                          </div><!-- /.zenith-carousel-box -->
                                          <div class="zenith-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
                                      </div>
                                  </div>
                              </div><!-- /.container -->
                          </div>
                          <!-- END PROJECT DETAIL -->
                      </div><!-- /.page-content -->

                  </div><!-- /#inner-content -->
              </div><!-- /#site-content -->
          </div><!-- /#content-wrap -->
      </div><!-- /#main-content FOR PROJECT DETAILS -->