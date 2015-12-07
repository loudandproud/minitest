<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
  <!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri().'/js/html5.js' ); ?>"></script>
	<![endif]-->
<?php wp_head(); ?>
</head>
<?php

  global  $page_meta;
  $detect                      = new Mobile_Detect;
  $display_top_bar             = onetone_option('display_top_bar','yes');
  $header_background_parallax  = onetone_option('header_background_parallax','');
  $header_top_padding          = onetone_option('header_top_padding','');
  $header_bottom_padding       = onetone_option('header_bottom_padding','');
  $header_background_parallax  = $header_background_parallax=="yes"?"parallax-scrolling":"";
  $top_bar_left_content        = onetone_option('top_bar_left_content','info');
  $top_bar_right_content       = onetone_option('top_bar_right_content','info');
  
  $logo               = onetone_option('logo','');

  $logo_retina        = onetone_option('logo_retina');
  $logo               = ( $logo == '' ) ? $logo_retina : $logo;

  $sticky_logo        = onetone_option('sticky_logo',$logo);
  $sticky_logo_retina = onetone_option('sticky_logo_retina');
  $sticky_logo        = ( $sticky_logo == '' ) ? $sticky_logo_retina : $sticky_logo;
  
  $header_overlay               = onetone_option('header_overlay','no');
 
  $overlay = '';
  if( $header_overlay == 'yes')
  $overlay = 'overlay';
  
  //sticky
  $enable_sticky_header         = onetone_option('enable_sticky_header','yes');
  $enable_sticky_header_tablets = onetone_option('enable_sticky_header_tablets','yes');
  $enable_sticky_header_mobiles = onetone_option('enable_sticky_header_mobiles','yes');
   
 if(isset($page_meta['nav_menu']) && $page_meta['nav_menu'] !='')
 $theme_location = $page_meta['nav_menu'];
 else
 $theme_location = 'primary';
 
 $body_class  = '';
 if(is_home() || is_front_page() )
 $body_class  = 'page homepage';
 $header_image = get_header_image();
?>
<body <?php body_class($body_class); ?>>
	<div class="wrapper">
		<div class="top-wrap">
        <?php if( $header_image ):?>
        <img src="<?php echo $header_image; ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
         <?php endif;?>
            <div class="slider-wrap"></div>
        </div>