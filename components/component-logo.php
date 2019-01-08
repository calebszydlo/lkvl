<?php

/** logo component
 * call this template to get an output of the logo, as uploaded to the theme's options page
 */

 $logo_svg = get_field('vector_logo', 'options');
 $logo = get_field('fallback_logo', 'options');

 ?>

 <a class="logo" href="<?php bloginfo('url'); ?>">
   <img src="<?php echo $logo_svg['url']; ?>" onerror="this.onerror=null;this.src='<?php echo $logo['url']; ?>'" alt="<?php echo $logo['alt']; ?>" />
 </a>
