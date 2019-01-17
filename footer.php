<?php
/**
 * The template for displaying the footer
 */
?>

<footer class="panel">
  <div class="u-bgColorSecondaryShade">
    <div class="container container__grid u-paddingTop8gu">
      <div class="container__col container__col-sm-4">

        <h5 class="u-textColorWhite">Quick links:</h5>
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
      <div class="container__col container__col-sm-4">

        <h5 class="u-textColorWhite">Follow us:</h5>
        <ul class="inline-list">
          <li class="inline-list__item"><a href="https://twitter.com/LKVL_Ultimate" class="u-textColorNeutral u-textSizePlus1"><i class="fa fa-twitter"></i></a></li>
          <li class="inline-list__item"><a href="https://www.instagram.com/lkvl_ultimate/" class="u-textColorNeutral u-textSizePlus1"><i class="fa fa-instagram"></i></a></li>
        </ul>

      </div>
      <div class="container__col container__col-sm-4">

        <h5 class="u-textColorWhite">Stay informed:</h5>
        <p class="u-textColorNeutral">Stay up to date by signing up for our emails</p>
        <p class="button">
          <a href="<?php the_permalink(get_id_by_slug('contact')); ?>" class="button--link button--link--red">Contact us!</a>
        </p>

      </div>
    </div><!--.container-->
  </div>
  <div class="u-bgColorBlack">
    <div class="container container__grid u-paddingVert2gu">
      <div class="container__col container__col-xs-12">
        <p class="u-textColorSecondaryTint u-textSizeMinus1 u-textAlignCenter u-margin0gu u-textLight">&copy; copyright <?php echo date('Y');?>, Lakeville Ultimate Disc Association</p>
      </div>
    </div><!--.container-->
  </div>
</footer><!--.panel-->

<?php wp_footer(); ?>


</div><!--#container-->
</body>
</html>
