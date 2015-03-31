<?php if ($teaser): ?>
            <div class="wrap-box">
                <h2>
                    <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
                </h2>

                <p><?php print strip_tags(render($content['body'])); ?></p>

                <a href="<?php print $node_url; ?>" class="read-more">Read More</a>

                <?php print render($content['field_culture_picture']); ?>

            </div>

<?php else: ?>

            <div class="single-content">
                <?php print render($content['body']); ?>       
            </div>
            <div class="single-author">
                <span><?php print strip_tags(render($name)); ?></span>
            </div>

<?php endif; ?>