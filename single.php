<?php get_header(); ?>

<div class="wrapper-middle">
    <main class="home-main">
    <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
        <div class="articles-featured">
          <article class="grid-box">
            <a href="<?php the_permalink(); ?>"><?php if(has_post_thumbnail()) { the_post_thumbnail(); } ?></a>
            <div class="article-discription post-article-description">
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h1 class="js-article-title article-title"><?php the_title(); ?></h1></a>
              <div class="post-meta">
                <span class="post-tag"><a href=""><?php the_category(', ')?></a></span>
                <span>/</span>
                <time><?php the_time('M, d, Y') ?></time>
              </div>
              <p><?php the_content(); ?></p>

             <!--  SNS Share buttons -->
             <div class="share-btns">
               <ul>
                 <li>Share</li>
                 <li><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=<?php the_title(); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                 <li><a href="http://twitter.com/intent/tweet?text=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>"
"  target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                 <li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
               </ul>
             </div>


            </div>
          </article>
          <?php endwhile; ?>
        <?php else :?>
        <h2><?php _e('記事が見つかりませんでした。'); ?></h2>
        <?php endif; ?>

        </div> <!-- articles-grids -->


        <div class="single-pagenation cf">
          <div class="single-pagenation-prev">
            <?php next_post_link('« %link', 'Prev'); ?>
          </div>
          <div class="single-pagenation-next">
            <?php previous_post_link('%link »', 'Next'); ?>
          </div>
        </div>

         <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>

            <?php if ( function_exists( "get_yuzo_related_posts" ) ) { get_yuzo_related_posts(); } ?>

          <?php endwhile; ?>
        <?php else :?>
        <h2><?php _e('記事が見つかりませんでした。'); ?></h2>
        <?php endif; ?>


      </main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>