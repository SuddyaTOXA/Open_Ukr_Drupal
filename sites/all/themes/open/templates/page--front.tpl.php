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

                <p class="description">
                    <?php
                        $body = field_get_items('node', $node, 'body');
                        $summary = $body[0]['summary'];
                        print $summary;
                    ?>
                </p>

                <?php print render($page['content']['system_main']['nodes'][$nid]['body']); ?>
            </section>

            <?php
                $block = module_invoke('views', 'block_view', 'video_on_homepage-block');
                print render($block['content']);
            ?>

<!--            <section class="video-box">-->
<!--                <ul class="video-list wrap-box">-->
<!--                    <li>-->
<!--                        <article>-->
<!--                            <header>-->
<!--                                <h3>Title of video</h3>-->
<!--                            </header>-->
<!---->
<!--                            <div class="video-container">-->
<!--                                <div class="start-video" data-videoid="438sGy9IE58">-->
<!--                                    <img src="http://img.youtube.com/vi/438sGy9IE58/0.jpg" alt="video">-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <p>Dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet</p>-->
<!--                        </article>-->
<!--                    </li>-->
<!---->
<!--                    <li>-->
<!--                        <article>-->
<!--                            <header>-->
<!--                                <h3>Another title of video</h3>-->
<!--                            </header>-->
<!---->
<!--                            <div class="video-container">-->
<!--                                <div class="start-video" data-videoid="0E4tRVQy9Rw">-->
<!--                                    <img src="http://img.youtube.com/vi/0E4tRVQy9Rw/0.jpg" alt="video">-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <p>Dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet</p>-->
<!--                        </article>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </section>-->
        </main>
</div><!--end WRAPPER-->

  <?php print render($page['footer']); ?>
