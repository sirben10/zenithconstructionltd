<nav id="main-nav" class="main-nav">
  <ul id="menu-primary-menu" class="menu">
    <li
      class="menu-item <?php if (!$page || $page == '') { ?> current-menu-item<?php } ?>">
      <a href="/">HOME</a>
    </li>
    <li class="menu-item menu-item-has-children <?php if (!empty($page) && $page == 'aboutus') { ?>current-menu-item<?php } ?>">
      <a>ABOUT US </a>
      <ul class="sub-menu">
        <li class="menu-item">
          <a href="about?p=aboutus">WHO WE ARE</a>
        </li>
        <li class="menu-item">
          <a href="our-management?p=our-management">CORPORATE MANAGEMENT</a>
        </li>
        <!-- <li class="menu-item">
                          <a href="page-about-careers">ABOUT CAREERS</a>
                        </li> -->
      </ul>
    </li>
    <li class="menu-item <?php if (!empty($page) && $page == 'services') { ?>current-menu-item<?php } ?>">
      <a href="services?p=services">SERVICES</a>
      <!-- <ul class="sub-menu">
                        <li class="menu-item">
                          <a href="page-services">SERVICES</a>
                        </li>
                        <li class="menu-item">
                          <a href="page-services-detail"
                            >SERVICES DETAIL</a
                          >
                        </li>
                      </ul> -->
    </li>
    <li class="menu-item menu-item-has-children">
      <a href="page-projects">PROJECTS</a>
      <ul class="sub-menu">
        <li class="menu-item">
          <a href="page-projects">PROJECTS</a>
        </li>
        <li class="menu-item">
          <a href="page-projects-full">PROJECTS FULL WIDTH</a>
        </li>
        <li class="menu-item">
          <a href="page-project-detail">PROJECTS DETAIL</a>
        </li>
      </ul>
    </li>
    <li class="menu-item menu-item-has-children">
      <a href="page-testimonial">PAGE</a>
      <ul class="sub-menu">
        <li class="menu-item">
          <a href="page-testimonial">PAGE TESTIMONIAL</a>
        </li>
        <li class="menu-item">
          <a href="page-pricing">PAGE PRICING</a>
        </li>
      </ul>
    </li>
    <li class="menu-item menu-item-has-children">
      <a href="page-blog">BLOG</a>
      <ul class="sub-menu right-sub-menu">
        <li class="menu-item">
          <a href="page-blog">BLOG</a>
        </li>
        <li class="menu-item">
          <a href="page-blog-single">BLOG SINGLE</a>
        </li>
      </ul>
    </li>
    <li class="menu-item menu-item-has-children">
      <a href="page-contact">CONTACT</a>
      <ul class="sub-menu right-sub-menu">
        <li class="menu-item">
          <a href="page-contact">CONTACT 1</a>
        </li>
        <li class="menu-item">
          <a href="page-contact-2">CONTACT 2</a>
        </li>
      </ul>
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