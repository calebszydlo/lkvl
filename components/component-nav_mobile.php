<?php

/** mobile nav component
 * call this template to get an output of the main navigation
 *
 * variables accepted:
 *    $nav_mobile_container_classes
 *    $nav_mobile_menu
 */

?>

<section id="navigationMobile" class="panel<?php $nav_mobile_container_classes ? print $nav_mobile_container_classes : '' ; ?>">
  <nav role="navigation" class="primary-nav primary-nav--mobile container container--narrow">
    <?php $nav_mobile_menu ? print $nav_mobile_menu :  print 'Please define what menu to display using the variable $nav_mobile_menu in the header.php file' ; ?>
  </nav>
</section>
