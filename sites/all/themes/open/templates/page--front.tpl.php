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

                    <?php if (!empty($primary_nav)):
                        print render($primary_nav);
                    endif; ?>

                  </nav> 

                </div>
            </div><!--end TOP-HEADER-->

            <?php
                $block = module_invoke('views', 'block_view', 'header_slider-block');
                print render($block['content']);
            ?>
        </header>

        <main class="main-content">
            <?php
                $node = menu_get_object();
                $nid = $node->nid;
            ?>
            <section class="preheader-box wrap-box">
                <header>
                    <h2><?php print $title; ?></h2>
                </header>

                <?php $descrip = $node->field_description['und']['0']['value'];
                if ($descrip !== FALSE): ?>
                    <p class="description"><?php print strip_tags($node->field_description['und']['0']['value']); ?></p>
                <?php endif; ?>

                <?php print render($page['content']['system_main']['nodes'][$nid]['body']); ?>
            </section>

            <?php
                $block = module_invoke('views', 'block_view', 'video_on_homepage-block');
                print render($block['content']);
            ?>
        </main>
</div><!--end WRAPPER-->

  <?php print render($page['footer']); ?>
