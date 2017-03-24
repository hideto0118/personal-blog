<?php get_header(); ?>

<div class="wrapper-middle">
    <main class="home-main">

        <div class="articles-grids">

        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
          <article class="grid-box">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><img src="img/article-example.jpg" alt=""></a>
            <div class="article-discription">
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h1 class="js-article-title"><?php the_title(); ?></h1></a>
              <div class="post-meta">
                <span class="post-tag"><a href=""><?php the_category(', ')?></a></span>
                <span>/</span>
                <time><?php the_time('M, d, Y') ?></time>
              </div>
              <p><?php echo mb_substr(strip_tags($post-> post_content), 0, 200).'...'; ?></p>
              <div class="keep-reading">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Keep Reading</a>
              </div>
            </div>
          </article>
          <?php endwhile; ?>
        <?php else :?>
        <h2><?php _e('記事が見つかりませんでした。'); ?></h2>
        <?php endif; ?>


        </div> <!-- articles-grids -->

        <?php wp_pagenavi(); ?>

        <!-- <div class="pagenation">
          <div class="pagenation-btn pagenation-btn-next"><a href="">Next Posts <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
        </div> -->
<!--       </section> -->
      </main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>