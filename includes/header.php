<!DOCTYPE html>
<html class="no-js">
<head>

	<title><?php bloginfo('title'); ?> | <?php the_title(); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body class="<?php if(is_page('home')){echo 'home';}else{echo 'page';} ?>">

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->
<?php $logo = get_field('logo_dark', 'options'); ?>
<div id="main-header">
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light">

  <div id="header-logo">
    <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php if($logo != ''){echo '<img src="' . $logo['url'] . '" class="img-fluid" alt="' . get_bloginfo('name') . '" />';} else{ bloginfo('name'); } ?></a>
  </div>

  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">&nbsp;</span>
  </button>

  <div class="collapse navbar-collapse" id="main-nav">
    <?php wp_nav_menu( array(
      'theme_location'  => 'primary',
      'depth'           => 3, // 1 = no dropdowns, 2 = with dropdowns.
      'container'       => 'div',
      'container_class' => 'navbar-collapse',
      'container_id'    => 'bs-example-navbar-collapse-1',
      'menu_class'      => 'navbar-nav ml-auto',
      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
      'walker'          => new WP_Bootstrap_Navwalker(),
    ) ); ?>
    
  </div>

</nav>
</div>
</div>