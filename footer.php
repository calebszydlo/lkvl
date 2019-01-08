<?php
/**
 * The template for displaying the footer
 */
?>

<footer class="panel u-bgColorBlack">
  <div class="container-lg">
    <div class="grid">
      <div class="unit-sm-4">

        <h4 class="u-textColorWhite">Quick links:</h4>
        <?php
          // $footer_nav =
          // 	wp_nav_menu(
          // 		array(
          // 			'theme_location'	=> 'footer',
          // 			'sort_column'			=> 'menu_order',
          // 			'container'				=> false,
          // 			'echo'						=> '0',
          // 			'depth'						=> 1,
          // 			'menu_class'			=> 'nav__list nav__list--footer'
          // 		)
          // 	);
          // echo $footer_nav;
        ?>

      </div>
      <div class="unit-sm-4">

        <h4 class="u-textColorWhite">Follow us:</h4>
        <ul class="inline-list">
          <li><a href="https://twitter.com/LKVL_Ultimate" class="white"><i class="fa fa-twitter fa-2x"></i></a></li>
          <li><a href="https://www.instagram.com/lkvl_ultimate/" class="white"><i class="fa fa-instagram fa-2x"></i></a></li>
        </ul>

      </div>
      <div class="unit-sm-4">

        <h4 class="u-textColorWhite">Stay informed:</h4>
        <p class="u-textColorWhite">Stay up to date by signing up for our emails</p>
        <p class="button">
          <a href="<?php the_permalink(get_id_by_slug('contact')); ?>" class="button--link button--link--red">Contact us!</a>
        </p>

      </div>

      <div class="unit-sm-12">
        <p class="u-textColorWhite u-textSizeMinus1 u-textAlignCenter u-margin0">&copy; copyright <?php echo date('Y');?>, Lakeville Ultimate Disc Association</p>
      </div>
    </div><!--.grid-->
  </div><!--.container-lg-->
</footer><!--.panel-->

<?php wp_footer(); ?>


</div><!--#container-->
</body>
</html>
