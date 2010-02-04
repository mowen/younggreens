<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language ?>" xml:lang="<?php print $language ?>">

<head>

  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
    <!--[if IE 6]>
      <style type="text/css" media="all">@import "<?php print base_path() . path_to_theme() ?>/ie-fixes/ie6.css";</style>
    <![endif]-->
    <!--[if lt IE 7.]>
      <script defer type="text/javascript" src="<?php print base_path() . path_to_theme() ?>/ie-fixes/pngfix.js"></script>
    <![endif]-->

</head>

<body>

<!-- begin wrapper -->
  <div id="container">

      <!-- primary links -->
      <div id="menu">
        <?php print theme('menu_links', $primary_links) ?>
      </div><!-- end primary links -->



   <!-- begin header -->
    <div id="header">


    <!-- site logo -->
    <?php if ($logo) { ?>
        <a href="<?php print $base_path ?>" title="<?php print t('Home') ?>">
          <img class="logo" src="<?php print $logo ?>" alt="<?php print t('Home') ?>" />
        </a>
    <?php } ?><!-- end site logo -->

    <!-- site name -->
      <?php if ($site_name) : ?>
            <h1>
	      <a href="<?php print $base_path ?>" title="<?php print t('Home') ?>">
	        <?php print $site_name ?>
	      </a>
	    </h1>
	  <?php endif; ?><!-- end site name -->
	  <!-- site slogan -->
          <?php if ($site_slogan) : ?>
	      <h2>
	        <?php print $site_slogan ?>
	      </h2>
	    <?php endif; ?><!-- end site slogan -->

  </div><!-- end header -->

  <!-- search box in nowhere land - NEEDS WORK-->
  <?php if ($search_box) : ?>
   <div id="searchBox">
      <div class="wrap">
        <div class="form-item">
          <?php print $search_box ?>
	</div>
      </div>
    </div>
  <?php endif; ?><!-- end search box -->


  <!-- content -->
<!--  <div id="main">-->
    <!-- begin main content -->
    <div id="mainContent" style="width: <?php print amadou_get_mainContent_width( $sidebar_left, $sidebar_right) ?>px;">
        
          <?php if ($mission) { ?><div class="mission"><?php print $mission ?></div><?php } ?>
          <?php if ($breadcrumb) { ?><div class="breadcrumb"><?php print $breadcrumb ?></div><?php } ?>
          <?php if ($title) { ?><h1 class="pageTitle"><?php print $title ?></h1><?php } ?>
          <?php if ($tabs) { ?><div class="tabs"><?php print $tabs ?></div><?php } ?>
          <?php if ($help) { ?><div class="help"><?php print $help ?></div><?php } ?>
          <?php if ($messages) { ?><div class="messages"><?php print $messages ?></div><?php } ?>
	  <?php print $content_top; ?>
          <?php print $content; ?>
	  <?php print $content_bottom; ?>
	  <?php print $feed_icons; ?>

      </div>

      <!-- Begin Sidebars -->
    <div id="sideBars-bg" style="width: <?php print amadou_get_sideBars_width( $sidebar_left, $sidebar_right) ?>px;">
      <div id="sideBars" style="width: <?php print amadou_get_sideBars_width( $sidebar_left, $sidebar_right) ?>px;">

	<!-- left sidebar -->
        <?php if ($sidebar_left) { ?>
          <div id="leftSidebar">
            <?php print $sidebar_left ?>
          </div>
        <?php } ?>
        
        <!-- right sidebar -->
        <?php if ($sidebar_right) { ?>
          <div id="rightSidebar">
            <?php print $sidebar_right ?>
          </div>
        <?php } ?>

      </div><!-- end sidebars -->
    </div><!-- end sideBars-bg -->
    


  <!-- footer -->
    <div id="footer">
      <?php print $footer_message ?> 
    </div><!-- end footer -->
    
  </div><!-- end container -->
  
  <?php print $closure ?>
  <script type="text/javascript">
  var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
  document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
  </script>
  <script type="text/javascript">
  var pageTracker = _gat._getTracker("UA-3498576-1");
  pageTracker._initData();
  pageTracker._trackPageview();
  </script>
</body>
</html>
