<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if IEMobile 7 ]> <html dir="ltr" lang="en-US"class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html dir="ltr" lang="en-US" class="no-js ie6 oldie"> <![endif]-->
<!--[if IE 7 ]>    <html dir="ltr" lang="en-US" class="no-js ie7 oldie"> <![endif]-->
<!--[if IE 8 ]>    <html dir="ltr" lang="en-US" class="no-js ie8 oldie"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" itemscope itemtype="http://schema.org/Organization" dir="ltr" lang="en-US" class="no-js"><!--<![endif]-->
<head>
  <title><?php wp_title(); ?></title>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
  <meta http-equiv="cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
  <meta http-equiv="pragma" content="no-cache" />
  <meta name="viewport" content="width=device-width" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no" />

  <link rel="canonical" href="<?php echo site_url(); ?>" />

  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="HandheldFriendly" content="true" />

  <!-- SEO -->

  <meta name="audience" content="all" />
  <meta name="keywords" content="" />

  <meta name="author" content="Wesley Andrade" />
  <meta name="copyright" content="" />
  <meta name="resource-type" content="Document" />
  <meta name="distribution" content="Global" />
  <meta name="robots" content="index, follow, ALL" />
  <meta name="GOOGLEBOT" content="index, follow" />
  <meta name="rating" content="General" />
  <meta name="revisit-after" content="2 Days" />
  <meta name="language" content="pt-br" />

  <?php wp_meta(); ?>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/default.css?v='.rand(5, 15); ?>" type="text/css" media="all" />

  <link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_url')."?v=".rand(5, 15); ?>"> 

  <script src="http://code.jquery.com/jquery-latest.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv-printshiv.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.js" type="text/javascript"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/js/functions.js?v=<?php echo rand(5, 15); ?>" type="text/javascript"></script>

  <script type="text/javascript">(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=493767340741485";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <?php wp_head(); ?>
</head>
<body <?php
    $offset = 0;
    global $post;
    if (is_front_page() || is_home()) {
      echo 'class="pg-home"';
    } else if(is_archive()){
      echo 'class="pg-interna pg-archive page_id_'.$post->ID.'"';
    } else if(is_single()){
      echo 'class="pg-interna pg-single page_id_'.$post->ID.'"';
    } else {
      echo 'class="pg-interna page_id_'.$post->ID.'"';
    }
  ?>>
  <div id="wrap">
    <header class="b">
      <?php wp_nav_menu( array( 'container' => 'nav', 'menu' => 'header','menu_class' => 'b','menu_id' => 'menuMobile' ) ); ?>
      <div class="wrap flex">
        <div class="flex20">
          <?php if ( get_theme_mod( 'logo' ) ) : ?>
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
          <?php else : ?>
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a>
          <?php endif; ?>
        </div>
        <div class="flex40"><!-- --></div>
        <div class="flex40">
          <?php wp_nav_menu( array( 'container' => false, 'menu' => 'linguas', 'menu_class' => '', 'menu_id' => 'language' ) ); ?>
        </div>
      </div>
    </header>