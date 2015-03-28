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
        <!--
                    <nav class="main-nav">
                        <ul>
                            <li class="active">
                                <a href="index.html">Home</a>

                                <ul class="sub-menu">
                                    <li>
                                        <a href="culture.html">Culture</a>
                                    </li>

                                    <li>
                                        <a href="religion.html">Religion</a>
                                    </li>

                                    <li>
                                        <a href="news.html">News</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="where.html">Where</a>

                                <ul class="sub-menu">
                                    <li>
                                        <a href="where.html">Location 1</a>
                                    </li>

                                    <li>
                                        <a href="where.html">Location 2</a>
                                    </li>

                                    <li>
                                        <a href="where.html">Location 3</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="how.html">How</a>

                                <ul class="sub-menu">
                                    <li>
                                        <a href="how.html">Ministry 1</a>
                                    </li>

                                    <li>
                                        <a href="how.html">Ministry 2</a>
                                    </li>

                                    <li>
                                        <a href="how.html">Ministry 3</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="join.html">Join</a>

                                <ul class="sub-menu">
                                    <li>
                                        <a href="contact-us.html">Contact Us</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
-->
                </div>
            </div><!--end TOP-HEADER-->
            
            <div class="slider-header">
                <ul class="rslides">
                    <li>
                        <div class="slide-description">
                            <h2>Beautiful Title</h2>
                            <p>Beautiful Description with many nice words.</p>
                        </div>
                        <img src="<?php print drupal_get_path('theme','open'); ?>/images/1.jpg" alt="1">
                    </li>

                    <li>
                        <div class="slide-description">
                            <h2>Wonderful Title</h2>
                            <p>Wonderful Description with many nice words. Wonderful Description with many nice words.</p>
                        </div>
                        <img src="<?php print drupal_get_path('theme','open'); ?>/images/2.jpg" alt="2">
                    </li>

                    <li>
                        <div class="slide-description">
                            <h2>Amazing Title</h2>
                            <p>Amazing Description with many nice words.</p>
                        </div>
                        <img src="<?php print drupal_get_path('theme','open'); ?>/images/3.jpg" alt="3">
                    </li>
                </ul>
            </div><!--end SLIDER-HEADER-->
        </header>

        <main class="main-content">
            <section class="preheader-box wrap-box">
                <?php print render($page['content']); ?>
            </section>

            <section class="video-box">
                <ul class="video-list wrap-box">
                    <li>
                        <article>
                            <header>
                                <h3>Title of video</h3>
                            </header>

                            <div class="video-container">
                                <div class="start-video" data-videoid="438sGy9IE58">
                                    <img src="http://img.youtube.com/vi/438sGy9IE58/0.jpg" alt="video">
                                </div>
                            </div>

                            <p>Dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet</p>
                        </article>
                    </li>

                    <li>
                        <article>
                            <header>
                                <h3>Another title of video</h3>
                            </header>

                            <div class="video-container">
                                <div class="start-video" data-videoid="0E4tRVQy9Rw">
                                    <img src="http://img.youtube.com/vi/0E4tRVQy9Rw/0.jpg" alt="video">
                                </div>
                            </div>

                            <p>Dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet</p>
                        </article>
                    </li>
                </ul>
            </section>
        </main>
</div><!--end WRAPPER-->

  <?php print render($page['footer']); ?>
