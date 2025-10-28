
<nav id="main-nav" class="main-nav">
  <ul id="menu-primary-menu" class="menu">
    <li
      class="menu-item <?php if (!$page || $page == '') { ?> current-menu-item<?php } ?>">
      <a href="/">HOME</a>
    </li>
    <li class="menu-item menu-item-has-children <?php if (!empty($page) && ($page == 'aboutus' || $page == 'management' || $page == 'plants')) { ?>current-menu-item<?php } ?>">
      <a>ABOUT US </a>
      <ul class="sub-menu">
        <li class="menu-item">
          <a href="<?php if (!empty($_GET['p']) && ($_GET['p'] == 'services' || $_GET['p'] == 'projects')) {?>/about?p=aboutus
            <?php } else{?>about?p=aboutus<?php } ?>">WHO WE ARE</a>
        </li>
        <li class="menu-item text-uppercase">
          <a href="<?php if (!empty($_GET['p']) && ($_GET['p'] == 'services' || $_GET['p'] == 'projects')) {?>/our-management?p=management
            <?php } else{?>our-management?p=management<?php } ?>">Our Management Structure</a>
        </li>
        <li class="menu-item">
          <a href="<?php if (!empty($_GET['p']) && ($_GET['p'] == 'services' || $_GET['p'] == 'projects')) {?>/our-plants-and-equipment?p=plants
            <?php } else{?>our-plants-and-equipment?p=plants<?php } ?>">PLANTS & EQUIPMENT</a>
        </li>
       
      </ul>
    </li>
    <li class="menu-item <?php if (!empty($page) && $page == 'services') { ?>current-menu-item<?php } ?>">
      <a href="<?php if (!empty($_GET['p']) && ($_GET['p'] == 'services' || $_GET['p'] == 'projects'))  {?>/services/?p=services
            <?php } else{?>services/?p=services<?php } ?>">SERVICES</a>
    
    </li>
    <li class="menu-item menu-item-has-children <?php if (!empty($page) && $page == 'projects') { ?>current-menu-item<?php } ?>">
      <a href="<?php if (!empty($_GET['p']) && ($_GET['p'] == 'services' || $_GET['p'] == 'projects'))  {?>/projects/?p=projects
            <?php } else{?>projects/?p=projects<?php } ?>">PROJECTS</a>
     
    </li>
   
    <li class="menu-item <?php if (!empty($page) && $page == 'contactus') { ?>current-menu-item<?php } ?>">
      <a href="<?php if (!empty($_GET['p']) && ($_GET['p'] == 'services' || $_GET['p'] == 'projects'))  {?>/contact-us?p=contactus
            <?php } else{?>contact-us?p=contactus<?php } ?>">CONTACT</a>
    </li>
  </ul>
</nav>


<div id="header-search">
  <a href="#" class="header-search-icon">
    <span class="search-icon fa fa-search">
    </span>
  </a>

  <form role="search" method="get" class="header-search-form" action="#">
    <label class="screen-reader-text">Search for:</label>
    <input type="text" value="" name="s" class="header-search-field" placeholder="Search...">
    <button type="submit" class="header-search-submit" title="Search"><i class="fa fa-search"></i></button>
  </form>
</div><!-- /#header-search -->