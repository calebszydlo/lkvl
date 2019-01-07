<?php
/**
 * The template for displaying the footer
 */
?>

<footer class="row row--footer row--arrow-top bg-black">

  <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1400 50" preserveAspectRatio="none">
    <polygon fill="#242325" points="0,50 810,0 1400,30 1400,50" />
  </svg> -->

  <div class="row--footer--inner clearfix">
    <div class="row--truncated">
      <div class="row__cell row__cell--span4 mobileBot30">
        <h4 class="white text-center--mobile">Quick links:</h4>
        <?php
          $footer_nav =
          	wp_nav_menu(
          		array(
          			'theme_location'	=> 'footer',
          			'sort_column'			=> 'menu_order',
          			'container'				=> false,
          			'echo'						=> '0',
          			'depth'						=> 1,
          			'menu_class'			=> 'nav__list nav__list--footer'
          		)
          	);
          echo $footer_nav;
        ?>
      </div><!--.row__cell-->
      <div class="row__cell row__cell--span4 mobileBot50 text-center--mobile">
        <h4 class="white">Follow us:</h4>
        <ul class="inline-list">
          <li><a href="https://twitter.com/LKVL_Ultimate" class="white"><i class="fa fa-twitter fa-2x"></i></a></li>
          <li><a href="https://www.instagram.com/lkvl_ultimate/" class="white"><i class="fa fa-instagram fa-2x"></i></a></li>
        </ul>
      </div><!--.row__cell-->
      <div class="row__cell row__cell--span4 mobileBot30 text-center--mobile">
        <h4 class="white">Stay informed:</h4>
        <p class="white">Stay up to date by signing up for our emails</p>
        <p class="button">
          <a href="<?php the_permalink(get_id_by_slug('contact')); ?>" class="button--link button--link--red">Contact us!</a>
        </p>
      </div><!--.row__cell-->
    </div><!--.row truncated-->
    <div class="row--truncated">
      <div class="row__cell row__cell--span12">
        <p class="copyright">&copy; copyright <?php echo date('Y');?>, Lakeville Ultimate Disc Association</p>
      </div><!--.row__cell-->
    </div><!--.row truncated-->
  </div><!--.bg-black-->
</footer><!--.row-->
<?php wp_footer(); ?>


</div><!--#container-->
</body>
</html>
