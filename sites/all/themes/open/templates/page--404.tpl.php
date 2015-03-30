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
<!--                        <form class="search-form" action="#" method="get">-->
<!--                            <input type="search" class="search-input" name="s" placeholder="Search">-->
<!--                            <input type="submit" class="search-submit" value="">-->
<!--                            <i class="fa fa-search"></i>-->
<!--                        </form>-->
                </div>

                <nav class="main-nav">

                    <?php if (!empty($primary_nav)): ?>
                        <?php print render($primary_nav); ?>
                    <?php endif; ?>

                </nav>

            </div>
        </div>
    </header>

    <section class="wrap-page-title">
        <div class="wrap-box">
            <header>
                <h1>There’s nothing here</h1>
            </header>

            <p>We so sorry</p>
        </div>
    </section>

    <main class="main-content">
        <div class="wrap-error wrap-box">
            <img src="<?php echo path_to_theme(); ?>/images/404_error.jpg" class="error-404-img" alt="error_404">

            <div class="error-text">
                <p class="error-text-header">Did you try searching?</p>
                <p>Click the search icon above and enter one or more keywords.</p>
            </div>
        </div><!--end WRAP-ERROR-->
    </main>
</div><!--end WRAPPER-->

<?php print render($page['footer']); ?>