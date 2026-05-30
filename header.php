<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" 
             alt="DigiSähkö Logo" 
             class="img-fluid"
             style="height: 40px; width: auto; filter: brightness(0);">
    </a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="<?php echo home_url(); ?>">Etusivu</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo get_post_type_archive_link('tuote'); ?>">Tuotteet</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('/yhteystiedot/'); ?>">Yhteystiedot</a></li>
        </ul>
    </div>
  </div>
</nav>