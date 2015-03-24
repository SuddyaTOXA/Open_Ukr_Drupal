<?php if ($teaser): ?>
            <a href="<?php print $node_url; ?>">
                <div class="where-img">           
                    <?php print render($content['field_photos_city']); ?>
                </div>
            </a>

            <div class="where-text">
                <h2><?php print $title; ?></h2>

                <?php print render($content['body']); ?>
                <a href="<?php print $node_url; ?>" class="read-more">Read More</a>
            </div>
<?php else: ?>

            <section class="wrap-page-title">
            <div class="wrap-box">
                <header>
                    <h1><?php print $title; ?></h1>
                </header>
                <p>will be here</p>
            </div>
            </section>

            <div class="single-content">
                <?php print render($content['body']); ?>       
            </div>
            <div class="single-author">
                <span>Matt Garaska</span>
            </div>

<?php endif ?>    