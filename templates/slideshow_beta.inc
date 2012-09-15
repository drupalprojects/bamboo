<!--
/**
 * @file
 * This is the slideshow include file for page.tpl.php
 */
-->

<section id="slider">
  <ul class="slides">
    <li>
      <div class="entry-container">
        <header class="entry-header">
          <h2 class="entry-title"><a href="<?php print url($url_1); ?>">
            <?php print $headline_1; ?></a>
          </h2>
        </header>
        <!-- entry-header -->
        <div class="entry-summary">
          <p><?php print $desc_1; ?></p>
          <a href="<?php print url($url_1); ?>">Read more...</a>
        </div>
        <!-- entry-summary -->
        <div class="clear"></div>
      </div>
      <!-- entry-container -->
      <img
        src="<?php print base_path() . drupal_get_path('theme', 'bamboo') . '/images/slide-image-1.jpg'; ?>"
        class="slide-image"/>

      <div class="clear"></div>
    </li>

    <li>
      <div class="entry-container">
        <header class="entry-header">
          <h2 class="entry-title"><a href="<?php print url($url_2); ?>">
            <?php print $headline_2; ?></a>
          </h2>
        </header>
        <!-- entry-header -->
        <div class="entry-summary">
          <p><?php print $desc_2; ?></p>
          <a href="<?php print url($url_2); ?>">Read more...</a>
        </div>
        <!-- entry-summary -->
        <div class="clear"></div>
      </div>
      <!-- entry-container -->
      <img
        src="<?php print base_path() . drupal_get_path('theme', 'bamboo') . '/images/slide-image-2.jpg'; ?>"
        class="slide-image"/>

      <div class="clear"></div>
    </li>

    <li>
      <div class="entry-container">
        <header class="entry-header">
          <h2 class="entry-title"><a href="<?php print url($url_3); ?>">
            <?php print $headline_3; ?></a>
          </h2>
        </header>
        <!-- entry-header -->
        <div class="entry-summary">
          <p><?php print $desc_3; ?></p>
          <a href="<?php print url($url_3); ?>">Read more...</a>
        </div>
        <!-- entry-summary -->
        <div class="clear"></div>
      </div>
      <!-- entry-container -->
      <img
        src="<?php print base_path() . drupal_get_path('theme', 'bamboo') . '/images/slide-image-3.jpg'; ?>"
        class="slide-image"/>

      <div class="clear"></div>
    </li>

  </ul>
</section>

<?php {
  // for the sake of  PAReview.
}