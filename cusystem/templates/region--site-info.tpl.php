<?php
/**
 * @file
 * Returns the HTML for the footer region.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728140
 */
?>

  <footer id="site-footer" class="<?php print $classes; ?>">
    <?php if ($content): ?>
      <div id="site-footer-content" class="col-lg-8 col-md-8">
        <?php print $content; ?>
      </div>
    <?php endif; ?>
    <?php $class = $content ? 'col-lg-4 col-md-4' : 'col-lg-12 col-md-12'; ?>
    <div id="cu-footer" class="<?php print $class; ?>">
        <p>&copy; Regents of the University of Colorado</p>
    </div>
  </footer>
