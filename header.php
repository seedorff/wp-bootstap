<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lustria|Fauna+One|Oxygen:400,700' rel='stylesheet' type='text/css'>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
    </head>
  <body>


 <!-- NAVBAR
    ================================================== -->
<div class="navbar-wrapper">
  <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
  <div class="container">
    <div class="navbar butter">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="btn-navbar2" data-toggle="collapse" data-target=".nav-collapse">
            <span class="brand" href="#">MENU</span>
          </a>
          <a class="brand logo" href="#">CPHbyBike.dk</a>

          <div class="nav-collapse collapse">
            <?php 
              wp_nav_menu( array(
                  'menu'       => 'side_menu',
                  'depth'      => 3,
                  'container'  => false,
                  'menu_class' => 'nav-stacked nav',
                  'fallback_cb' => 'wp_page_menu',
                  //Process nav menu using our custom nav walker
                  'walker' => new wp_bootstrap_navwalker())
              );
            ?>   
          </div>
        </div> 
      </div>
    </div><!-- /.navbar -->
  </div> <!-- /.container -->
</div><!-- /.navbar-wrapper -->


  