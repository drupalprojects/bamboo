<?php
/**
 * @file
 * This is the alpha slideshow include file for page.tpl.php.
 */

?>

<div class="flexslider">
  <ul class="slides">
    <li>
      <a href="<?php print url($url_1); ?>">
        <img src="<?php print base_path()
          . drupal_get_path('theme', 'bamboo') . '/images/slide-image-1.jpg';
        ?>"/></a>
      <?php if ($headline_1) : ?>
      <div class="flex-caption"><h3> <?php print $headline_1; ?> </h3></div>
      <?php endif; ?>
    </li>
    <li>
      <a href="<?php print url($url_2); ?>">
        <img src="<?php print base_path()
          . drupal_get_path('theme', 'bamboo') . '/images/slide-image-2.jpg';
        ?>"/></a>
      <?php if ($headline_2) : ?>
      <div class="flex-caption"><h3> <?php print $headline_2; ?> </h3></div>
      <?php endif; ?>
    </li>
    <li>
      <a href="<?php print url($url_3); ?>">
        <img src="<?php print base_path()
          . drupal_get_path('theme', 'bamboo') . '/images/slide-image-3.jpg';
        ?>"/></a>
      <?php if ($headline_3) : ?>
      <div class="flex-caption"><h3> <?php print $headline_3; ?> </h3></div>
      <?php endif; ?>
    </li>
  </ul>
</div>
