<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php echo bloginfo('name'); ?> - <?php the_title(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:image" content="<?php echo get_theme_file_uri('assets/images/site-thumbnail.png') ?>" />
    <meta property="og:site_name" content="CyberLite Technology"/>
    <meta property="og:title" content="CyberLite Technology"/>
    <meta property="og:description" content="A software development and consulting company driven by innovation and maintaining the most cutting-edge knowledge base."/>
    <meta property="og:url" content="http://www.cyberlitetech.com/">
    <meta property="og:type" content="Company Site"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>

  <body>
    <header>
      <a href="<?php echo esc_url(home_url('/'));?>"><img class="blog-logo" src="<?php echo esc_url(get_site_icon_url()); ?>"></a>
      <div class="company-name">
        <h6>CyberLite Technology</h6>
        <p>Software Development and Consulting</p>
      </div>

      <nav class="navbar">
        <input type="checkbox" id="menu-toggler" class="menu-toggler">
        <label for="menu-toggler" class="menu-toggler-label">
          <span></span>
        </label>

        <div class="menu">
          <ul>
            <li class="nav-item <?php if (is_page('services')) echo ' active' ?>">
              <a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>services">Services</a>
            </li>
            <li class="nav-item <?php if (is_page('portfolio')) echo ' active' ?>">
              <a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>portfolio">Portfolio</a>
            </li>
            <li class="nav-item <?php if (is_page('about')) echo ' active' ?>">
              <a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>about">About</a>
            </li>
            <li class="nav-item <?php if (is_page('contact')) echo ' active' ?>">
              <a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>contact">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>