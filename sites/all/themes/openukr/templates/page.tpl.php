<div class="wrapper">
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

                    <nav class="main-nav">
                      <?php
                          $main_menu = menu_navigation_links('main-menu');
                          print theme('links', array(
                          'links' => $main_menu,
                          ));
                      ?>
                    </nav><!--end NAVIGATION-->
                </div>
            </div><!--end TOP-HEADER-->

            <!--<div class="slider-header">
                <ul class="rslides">
                    <li>
                        <div class="slide-description">
                            <h2>Beautiful Title</h2>
                            <p>Beautiful Description with many nice words.</p>
                        </div>
                        <img src="images/1.jpg" alt="1">
                    </li>

                    <li>
                        <div class="slide-description">
                            <h2>Wonderful Title</h2>
                            <p>Wonderful Description with many nice words. Wonderful Description with many nice words.</p>
                        </div>
                        <img src="images/2.jpg" alt="2">
                    </li>

                    <li>
                        <div class="slide-description">
                            <h2>Amazing Title</h2>
                            <p>Amazing Description with many nice words.</p>
                        </div>
                        <img src="images/3.jpg" alt="3">
                    </li>
                </ul>
            </div>--><!--end SLIDER-HEADER-->

        </header>

        <main class="main-content">

        <?php print render($page['content']); ?>

        </main>
    </div><!--end WRAPPER-->