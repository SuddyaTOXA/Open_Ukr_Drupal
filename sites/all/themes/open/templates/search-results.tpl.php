<?php

/**
 * @file
 * Default theme implementation for displaying search results.
 *
 * This template collects each invocation of theme_search_result(). This and
 * the child template are dependent to one another sharing the markup for
 * definition lists.
 *
 * Note that modules may implement their own search type and theme function
 * completely bypassing this template.
 *
 * Available variables:
 * - $search_results: All results as it is rendered through
 *   search-result.tpl.php
 * - $module: The machine-readable name of the module (tab) being searched, such
 *   as "node" or "user".
 *
 *
 * @see template_preprocess_search_results()
 *
 * @ingroup themeable
 */
?>
<?php if ($search_results): ?>
<div class="wrap-results wrap-box">
  <p class="search-info"><?php print $search_totals; ?> for &ldquo;<?php print get_current_search_terms(); ?>&rdquo;</p>

    <p><?php print (render($results['search_total'])); ?></p>

  <ul class="list-results <?php print $module; ?>-results">
    <?php print $search_results; ?>
  </ul>
  <?php print $pager; ?>
    <?php print theme('custom__pager'); ?>
</div>
<?php else : ?>
  <div class="wrap-no-results wrap-box">
    <p class="no-results-info">Sadly, nothing</p>
    <img src="/<?php print drupal_get_path('theme','open'); ?>/images/search_error.jpg" class="no-results-img" alt="search_error">
  </div><!--end WRAP-NO-RESULTS-->
<?php endif; ?>
