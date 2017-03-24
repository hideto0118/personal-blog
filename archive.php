<?php get_header(); ?>

<div class="wrapper-middle">
    <main class="home-main">

<?php
  $args = array(
        'posts_per_page' => 1,
    );

    //Featured post switches depending on category
    if(in_category('Workout'))
    {
      $args['tag'] = 'featured-workout';
    }elseif(in_category('Nutrition')){
      $args['tag'] = 'featured-nutrition';
    }elseif(in_category('Web Dev')){
      $args['tag'] = 'featured-webdev';
    }elseif(in_category('Vancouver')){
      $args['tag'] = 'featured-vancouver';
    }elseif(in_category('English Learning')){
      $args['tag'] = 'featured-english';
    }

    //Displaying featured post
    $featured = new WP_Query($args);
    if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post();
      $featuredPostID = get_the_ID();
    ?>


        <div class="articles-featured">
          <article class="grid-box">
            <?php if(has_post_thumbnail()) { the_post_thumbnail(); } ?>
            <div class="article-discription">
            <h1 class="js-article-title article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              <div class="post-meta">
                <span class="post-tag"><a href=""><?php the_category(', '); ?></a></span>
                <span>/</span>
                <time><?php the_time('M d, Y') ?></time>
              </div>
              <p><?php echo mb_substr(strip_tags($post-> post_content), 0, 200).'...'; ?>...</p>

              <div class="keep-reading"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Keep Reading</a></div>
            </div>
          </article>
        </div>

<?php
endwhile; else:
endif;
?>

        <div class="articles-grids">
        <?php if (have_posts()) :  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          query_posts( $query_string . "&paged=$paged" );  ?>
          <?php while (have_posts()) : the_post();
            $currentPostID = get_the_ID();
          ?>


          <?php if(!($currentPostID == $featuredPostID)) : ?>
          <article class="grid-box">
            <?php if(has_post_thumbnail()) { the_post_thumbnail(); } ?>
            <div class="article-discription">
              <h1 class="js-article-title article-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
              <div class="post-meta">
                <span class="post-tag"><a href=""><?php the_category(', ')?></a></span>
                <span>/</span>
                <time><?php the_time('M d, Y') ?></time>
              </div>
              <p><?php echo mb_substr(strip_tags($post-> post_content), 0, 200).'...'; ?></p>
              <div class="keep-reading">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Keep Reading</a>
              </div>
            </div>
          </article>
          <?php endif; ?>
          <?php endwhile; ?>
          <?php the_posts_pagination( array(
          'screen_reader_text' => ' ',
          'prev_text' => 'Previous',
          'next_text' => 'Next',
          'mid_size' => 2,
           ) ); ?>
        <?php else :?>
        <h2><?php _e('記事が見つかりませんでした。'); ?></h2>
        <?php endif; ?>

        </div> <!-- articles-grids -->
<!--
<?php wp_pagenavi(); ?> -->

      </main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>