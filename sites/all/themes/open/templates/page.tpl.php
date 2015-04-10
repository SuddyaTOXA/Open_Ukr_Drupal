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
                        <?php
                            $block = module_invoke('search', 'block_view', 'form');
                            print render($block['content']);
                        ?>
                    </div>

                  <nav class="main-nav">

                    <?php if (!empty($primary_nav)): ?>
                    <?php print render($primary_nav); ?>
                    <?php endif; ?>

                  </nav>   

                </div>
            </div>
        </header>

    <?php if((arg(0) == 'search') == FALSE): ?>
        <section class="wrap-page-title">
            <div class="wrap-box">
                <?php if (arg(0) == 'node' && arg(1) == '30') { ?>
                    <header>
                        <h1>There’s nothing here</h1>
                    </header>

                    <p>We so sorry</p>
                <?php }

                elseif (arg(0) == 'node' && arg(1) == '31') { ?>
                    <header>
                        <h1>Error 403</h1>
                    </header>

                    <p>Access Denied/Forbidden</p>

                <?php } else { ?>

                    <header>
                        <h1><?php print $title; ?></h1>
                    </header>

                    <?php $descrip = $node->field_description['und']['0']['value'];
                    if ($descrip !== FALSE): ?>
                        <p><?php print strip_tags($node->field_description['und']['0']['value']); ?></p>
                    <?php endif; ?>

                    <?php $art_descrip = $node->field_article_description['und']['0']['value'];
                    if ($art_descrip !== FALSE): ?>
                        <p><?php print strip_tags($node->field_article_description['und']['0']['value']); ?></p>
                    <?php endif; ?>

                <?php } ?>
            </div>
        </section>

        <main class="main-content">
    <?php endif; ?>
            <?php print render($page['content']); ?>
        </main>

        <?php if ($confirmation) : ?>
            <div id="popupWrapper">
                <div id="popupMessage">
                    <div class="closeForm">&times;</div>
                    <?php print $confirmation_msg; ?>
                </div>
            </div>
        <?php endif; ?>

    </div><!--end WRAPPER-->

  <?php print render($page['footer']); ?>

