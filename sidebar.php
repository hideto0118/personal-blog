<aside class="sidebar">

<?php if(!is_page('About')) : ?>
   <?php if ( is_active_sidebar( 'profile-widget' ) ) :
  dynamic_sidebar( 'profile-widget' );
  else: ?>
    <div class="widget">
    <h2>No Widget</h2>
    <p>ウィジットは設定されていません。</p>
    </div>
  <?php endif; ?>
<?php endif; ?>

  <?php if ( is_active_sidebar( 'category-widget' ) ) :
  dynamic_sidebar( 'category-widget' );
  else: ?>
    <div class="widget">
    <h2>No Widget</h2>
    <p>ウィジットは設定されていません。</p>
    </div>
  <?php endif; ?>

  <?php if ( is_active_sidebar( 'instagram-widget' ) ) :
  dynamic_sidebar( 'instagram-widget' );
  else: ?>
    <div class="widget">
    <h2>No Widget</h2>
    <p>ウィジットは設定されていません。</p>
    </div>
  <?php endif; ?>

  <!-- <div class="profile grid-box no-margin-top">
    <img src="<?php echo get_template_directory_uri(); ?>/img/hideto.jpg" alt="">
    <div class="profile-description">
      <a href="#"><h3>Hideto</h3></a>
      <div class="job-title">Front-End Web Developer<br>& Body Make Enthusiast</div>
      <div class="profile-summary">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </p>
      </div>
      <div class="profile-footer">
        <a class="know-more" href="">Know More</a>
        <ul class="profile-sns-ul sns-icons">
          <li class="facebook sns"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li class="twitter sns"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li class="linkedIn sns"><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          <li class="instagram sns"><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>
  </div> -->
  <!-- <div class="categories widget grid-box">
    <h3 class="widget-title">Categories</h3>
    <div class="categories-names">
      <ul>
      <li><a href="#">Workout <span class="size-post">[0]</span></a></li>
        <li><a href="#">Nutrition <span class="size-post">[0]</span></a></li>
        <li><a href="#">Web Dev <span class="size-post">[0]</span></a></li>
        <li><a href="#">Vancouver <span class="size-post">[0]</span></a></li>
        <li><a href="#">English Learning <span class="size-post">[0]</span></a></li>
      </ul>
    </div>
  </div> -->
  <!-- <div class="Instagram widget grid-box">
    <h3 class="widget-title">Instagram</h3>
    <ul class="widget-instagram-pictures js-pictures-list">
    </ul>
  </div> -->
</aside>