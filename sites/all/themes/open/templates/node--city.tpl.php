<?php if ($teaser): ?>
            <a href="<?php print $node_url; ?>">
                <div class="where-img">           
                    <?php print render($content['field_photos_city']); ?>
                </div>
            </a>

            <div class="where-text">
                <h2>
                    <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
                </h2>

                <p><?php print strip_tags(render($content['body'])); ?></p>

                <div class="read-more-box">
                    <a href="<?php print $node_url; ?>" class="read-more">Read More</a>
                </div>
            </div>
<?php else: ?>

            <div class="single-content">
                <?php print render($content['body']); ?>       
            </div>
            <div class="single-author">
                <span>Matt Garaska</span>
            </div>

<?php endif; ?>