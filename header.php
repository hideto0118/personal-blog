<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <title>Web Dev Plus Body Make in Vancouver</title> -->
    <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>//img/logo_radius60px.png"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
  <header>

    <nav class="navbar">

    <?php
      $defaults = array(
          'container' => false,//No need div outside of ul
          'theme_location' => 'primary-menu',
          'menu_class' => 'nav' //Class in ul
        );
      wp_nav_menu($defaults);
    ?>

<!--       smartphone menu -->
      <div class="bar-toggle js-bar-toggle">
        <div class="bar js-bar">
          <i class="fa fa-bars" aria-hidden="true"></i></div>
        <div class="cross js-cross"><i class="fa fa-times" aria-hidden="true"></i>
        </div>
      </div>

      <ul class="nav-sns sns-icons">
        <li class="facebook sns"><a href="https://www.facebook.com/hideto.yasunori" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li class="github sns"><a href="https://github.com/hideto0118" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></li>
        <li class="linkedIn sns"><a href="https://www.linkedin.com/in/hideto-yasunori-57a440aa?trk=hp-identity-name" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        <li class="instagram sns"><a href="https://www.instagram.com/hideto0118/" target="_blank"><i class="fa fa-instagram" aria-hidden="true" target="_blank"></i></a></li>
      </ul>
    </nav>

    <!--     smartphone menu -->
    <div class="toggle-menu">
      <?php
        $defaults = array(
            'container' => false,//No need div outside of ul
            'theme_location' => 'smartphone-menu',
            'menu_class' => 'toggle-menu-ul' //Class in ul
          );
        wp_nav_menu($defaults);
      ?>
    </div>

    <div class="main-logo-outer">
      <div class="logo-container">
        <svg version="1.1" id="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 300 400.2" style="enable-background:new 0 0 300 400.2;" xml:space="preserve">
        <title>Hideo Logo</title>
        <g id="logo_all">
          <g id="logo_center">
            <path d="M90.2,270.8l3.1-9.6l57.1,18.3l-3.1,9.6L90.2,270.8z M147.6,289.5L89.9,271l3.3-10.2l57.7,18.5L147.6,289.5z M90.7,270.6
              l56.6,18.1l2.9-9l-56.6-18.2L90.7,270.6z"/>
            <path d="M93.5,291.1l3.1-9.6l39.6,12.7l-3.1,9.6L93.5,291.1z M133.3,304.1L133,304l-39.8-12.7l3.2-10.1l0.2,0.1l39.8,12.8
              L133.3,304.1z M93.8,290.9l39.1,12.6l2.9-9.1l-39.1-12.6L93.8,290.9z"/>
            <path d="M196.1,137.5l-3.1,9.6l-57.1-18.3l3.1-9.6L196.1,137.5z M193.2,147.5L135.5,129l3.3-10.2l57.7,18.5L193.2,147.5z
               M136.2,128.6l56.6,18.1l2.9-9l-56.6-18.2L136.2,128.6z"/>
            <path d="M193,117l-3.1,9.6l-39.6-12.7l3.1-9.6L193,117z M190.1,126.9L150,114.1l3.2-10.1l40.1,12.9L190.1,126.9z M150.6,113.8
              l39.1,12.6l2.9-9.1l-39.1-12.6L150.6,113.8z"/>
            <path d="M157.8,141.8l9.6,3.1l-39,121.5l-9.6-3.1L157.8,141.8z M128.7,267l-10.5-3.4l0.1-0.4l39.1-121.9l10.4,3.4l-0.1,0.4
              L128.7,267z M119.4,263l8.8,2.8l38.7-120.7l-8.8-2.8L119.4,263z"/>
          </g>
          <path id="logo_left" d="M83.4,238.9l-70.8-42l78.8-35.7l5.6,7.3l-64.7,29.4l57.8,34.3L83.4,238.9z"/>
          <path id="logo_right" d="M210.5,238.9l70.8-42l-78.9-35.7l-5.6,7.3l64.8,29.4l-57.8,34.3L210.5,238.9z"/>
        </g>
        </svg>
      </div>

      <!-- <div class="main-logo">
        <a href="<?php echo get_permalink(16); ?>"><img class="js-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt=""></a>
      </div> -->
      <a href="<?php echo get_permalink(16); ?>">
        <h1 class="site-title">Web Dev<span class="site-title-plus"> + </span>Body Make</h1>
      </a>
      <p class="catch-copy">in Vancouver</p>
    </div>

  </header>