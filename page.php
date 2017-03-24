<?php get_header(); ?>

<div class="wrapper-middle">
   <main class="about-main grid-box">
      <div class="about-title-outer">
        <h1 class="about-title">Hideto</h1>
        <h3 class="about-job-title">Front-End Web Developer & Body Make Enthusiast</h3>
      </div>
      <div class="about-profile-img-box">
        <img class="about-profile-img" src="<?php echo get_template_directory_uri(); ?>/img/profile02.jpg" alt="profile">
        <ul class="about-sns sns-icons">
          <li class="facebook"><a href="https://www.facebook.com/hideto.yasunori" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li class="github"><a href="https://github.com/hideto0118" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></li>
          <li class="linkedIn"><a href="https://www.linkedin.com/in/hideto-yasunori-57a440aa?trk=hp-identity-name" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          <li class="instagram"><a href="https://www.instagram.com/hideto0118/" target="_blank"><i class="fa fa-instagram" aria-hidden="true" target="_blank"></i></a></li>
        </ul>
      </div>

      <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
      <?php else :?>
      <h2><?php _e('記事が見つかりませんでした。'); ?></h2>
      <?php endif; ?>

    </main>


<?php get_sidebar(); ?>
<?php get_footer(); ?>