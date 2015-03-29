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

    <section class="wrap-page-title">
        <div class="wrap-box">
            <header>
                <h1>Error 403</h1>
            </header>

            <p>Access Denied/Forbidden</p>
        </div>
    </section>

    <main class="main-content">
        <div class="wrap-error wrap-box">
            <span class="error-number">403</span>

            <div class="error-text">
                <p class="error-text-header">Did you try searching?</p>
                <p>Click the search icon above and enter one or more keywords.</p>
            </div>
        </div><!--end WRAP-ERROR-->
    </main>
</div><!--end WRAPPER-->

<?php print render($page['footer']); ?>