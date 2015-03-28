<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>
        <header class="header">
            <div class="top-header">
                <div class="wrap-box">
                    <h1 class="logo">
                      <?php if ($logo): ?>
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                        </a>

                      <?php else: /* Use h1 when the content title is empty */ ?>
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                            LOGO
                        </a>  
                      <?php endif; ?>
                    </h1>

                    <div id="search-box">
                        <form class="search-form" action="#" method="get">
                            <input type="search" class="search-input" name="s" placeholder="Search">
                            <input type="submit" class="search-submit" value="">
                            <i class="fa fa-search"></i>
                        </form>
                    </div>

                  <nav class="main-nav">

                    <?php if (!empty($primary_nav)): ?>
                    <?php print render($primary_nav); ?>
                    <?php endif; ?>

                  </nav>   

                </div>
            </div>
        </header>

        <main class="main-content">

            <?php print render($page['content']); ?>     

        </main>
</div><!--end WRAPPER-->

  <?php print render($page['footer']); ?>

