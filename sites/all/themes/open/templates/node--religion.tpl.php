<?php if ($teaser): ?>
            <div class="wrap-box">
                <a href="<?php print $node_url; ?>">
                    <h2><?php print $title; ?></h2>
                </a>

                <?php print render($content['body']); ?>

                <a href="<?php print $node_url; ?>" class="read-more">Read More</a>

                <?php print render($content['field_religion_picture']); ?>

            </div>


<?php else: ?>

            <section class="wrap-page-title">
            <div class="wrap-box">
                <header>
                    <h1><?php print $title; ?></h1>
                </header>
            </div>
            </section>

            <div class="single-content">
                <?php print render($content['body']); ?>       
            </div>
            <div class="single-author">
                <span>Matt Garaska</span>
            </div>

<?php endif ?>    