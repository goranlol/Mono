<!DOCTYPE html>

<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php single_post_title(); ?> - Goran Grce</title>

</head>

<style>
@font-face {
    font-family: 'Bainai-DEMO';
    src: url('<?php echo get_bloginfo('template_directory'); ?>/font/Bainai-DEMO-Regular.eot');
    font-weight: normal;
    font-style: normal;
}
</style>

<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">

<html>
<body>

<div id="lightbox-wrapper">
  <div id="lightbox" class="lightbox" > 
    
      <a tabindex="2" id="gotoNext" class="lightbox-navs lightbox-gotoNext" href="#_" > 🡪 </a>
      <a tabindex="3" id="gotoPrev" class="lightbox-navs lightbox-gotoPrev" href="#_" > 🡨 </a>
      <a id="lightbox-close" class="lightbox-closer" href="#_" ></a>

      <img id="lightbox-image" class="lightbox-image" src="">

      <div class="lightbox-tooltip"> <span style="color:var(--heading-color);">🡨</span> and <span style="color:var(--heading-color);">🡪</span> to navigate, <span style="color:var(--heading-color);">[Esc]</span> to exit. </div>

  </div>
</div>


	<a class="home-btn" id="home-btn" tabindex="1" href="<?php echo get_bloginfo( 'wpurl' );?>"><span>🡬</span> back</a>
