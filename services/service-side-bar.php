<?php 
include_once('../includes/functions.php');
$services = fetchAllServicesUsers($dbh);
$slug = $_GET[md5('service')];
?>
<div id="inner-sidebar" class="inner-content-wrap">
    <div class="widget widget_list">
      <div class="inner">
        <ul class="list-wrap">
          <?php foreach ($services as $service) {?>
          <li class="list-item">
            <a href="<?php echo $service['slug']; ?>?p=services&<?php echo $serv.'='.$service['slug']; ?>"><span class="text"><?php echo htmlentities($service['serviceName']); ?></span></a>
          </li>
        <?php } ?>
        </ul>
      </div>
    </div>
    <!-- /.widget_list -->

    <div
      class="widget widget_help align-center has-shadow no-sep has-border border-solid"
    >
      <div class="inner">
        <h2 class="widget-title margin-bottom-14">
          <span>HOW CAN WE HELP ?</span>
        </h2>
        <p class="text line-height-26 margin-bottom-23">
          Are you interested in finding out how we can make your project. Please
          email us.
        </p>
        <div class="elm-button">
          <a href="../contact-us?p=contactus" class="zenith-button bg-accent pd30">GET IN TOUCH</a>
        </div>
      </div>
    </div>
  </div>
