<?php

/** main nav component
 * call this template to get an output of the main navigation
 *
 * variables accepted:
 *    $nav_primary
 */

?>

<nav role="navigation" class="primary-nav u-sm-hidden">
  <?php $nav_primary ? print $nav_primary : print 'Please define what menu to display using the variable $nav_primary in the header.php file' ; ?>
</nav>
