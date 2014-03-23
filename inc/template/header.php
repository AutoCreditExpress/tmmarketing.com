<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php echo $pageTitle;?></title>
<meta name="description" content="<?php echo $pageDescription;?>">
<meta name="keywords" content="<?php echo $pageKeywords;?>">
    <link rel="shortcut icon" href="<?php echo $webPath;?>favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo $webPath;?>favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="<?php echo $webPath; ?>css/layout.css" type="text/css" />
<link rel='stylesheet' id='rs-settings-css'  href='<?php echo $webPath; ?>css/settings.css' type='text/css' media='all' />
<link rel='stylesheet' id='rs-captions-css'  href='<?php echo $webPath; ?>css/captions.css' type='text/css' media='all' />
<link rel="stylesheet" href="<?php echo $webPath; ?>css/main.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $webPath; ?>css/shortcodes.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $webPath; ?>css/icons.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $webPath; ?>css/flexslider.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $webPath; ?>css/responsive.css" type="text/css" />
<script type="text/javascript" src="<?php echo $webPath; ?>js/jquery.js"></script>
<script type='text/javascript' src='<?php echo $webPath; ?>js/jquery.themepunch.revolution.min.js'></script>
</head>

<body class="responsive">

<!-- mobile menu Starts Here-->
<div id="mobile_navigation">
  <ul id="mobile_menu" class="mobile_menu">
    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2597 current-menu-parent"><a href="<?php echo $webPath;?>">Home</a></li>
    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2596"><a href="<?php echo $webPath;?>supplier/">For Suppliers</a></li>
    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2598"><a href="<?php echo $webPath;?>marketing_companies/">For Marketers</a></li>
      <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2603"><a href="<?php echo $webPath;?>about_us/">About Us</a></li>
      <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2614"><a href="<?php echo $webPath;?>contact_us/">Contact Us</a></li>
  </ul>
</div>

<!-- End Mobile Navigation -->

<div id="header_space"></div>
<header id="header">
  <section id="main_header_container">
    <div id="main_navigation">
      <div class="container">
        <div class="row-fluid">
          <div class="row-fluid">
            <div class="span12">

              <!-- logo -->

              <div class="logo-container"> <a href="<?php echo $webPath; ?>" id="logo" class="clearfix"><img src="<?php echo $webPath; ?>images/logo.png" alt="Blandes"/></a> </div>
              <div id="toggle-menu"> <a class="toggle-menu" href="#"><i class="icon-list2"></i></a>
                <div class="clear"></div>
              </div>
              <div id="header-search-button" style="width: 200px; font-size:13px; "><a href="<?php echo $webPath;?>employment/"  class="search-button">Apply for a Job</a></div>
              <ul id="main_menu" class="main_menu">
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2597 current-menu-parent"><a href="<?php echo $webPath;?>">Home</a></li>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2596"><a href="<?php echo $webPath;?>supplier/">For Suppliers</a></li>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2598"><a href="<?php echo $webPath;?>marketing_companies/">For Marketers</a></li>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2603"><a href="<?php echo $webPath;?>about_us/">About Us</a></li>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2614"><a href="<?php echo $webPath;?>contact_us/">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- section search -->
  <section id="header-search-panel">
    <div class="container">
      <div class="row-fluid">
        <div class="search">
          <div>
            <form action="#" id="header-search-form" method="get">
              <a class="close" href="#"><i class="icon-blandes-remove"></i></a>
              <input type="text"  id="header-search" name="s" value="Search" autocomplete="off" />
              <!-- Create a fake search button -->
              <span class="fake-submit-button"><i class="icon-blandes-search"></i>
              <input type="submit"  name="submit" value="submit" />
              </span>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</header>