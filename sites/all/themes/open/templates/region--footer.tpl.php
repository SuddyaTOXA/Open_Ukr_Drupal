<?php
/**
 * @file
 * Returns the HTML for the footer region.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728140
 */
?>
<?php if ($content): ?>
    <div class="wrap-footer">
        <footer class="footer">
            <div id="map">
                <!-- add Google Map -->
                <?php
                    $block = module_invoke('views', 'block_view', 'footer_map-block');
                    print render($block['content']);
                ?>
            </div>

            <div class="wrap-form">
                <div class="wrap-box">
                    <div class="wrap-copy">
                        <p class="copyright">Copyrights enim ad minim veniam, quis nostrud exerci tation ullamcorper
                            suscipit lobortis nisl ut aliquip iusto odio dignissim qui blandit praesent lupt.</p>


                        <?php $fb = token_replace('[socialmedia:sm-facebook_url]');
                              $tw = token_replace('[socialmedia:sm-twitter_url]');
                              $yt = token_replace('[socialmedia:sm-youtube_url]');

                            if ( $fb || $tw || $yt ) { ?>
                        <ul class="list-social">
                            <?php if($fb): ?>
                            <li>
                                <a href="<?php print $fb; ?>" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                    Facebook
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if($tw): ?>
                            <li>
                                <a href="<?php print $tw; ?>" target="_blank">
                                    <i class="fa fa-twitter"></i>
                                    Twitter
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if($yt): ?>
                            <li>
                                <a href="<?php print $yt; ?>" target="_blank">
                                    <i class="fa fa-youtube-play"></i>
                                    YouTube
                                </a>
                            </li>
                            <?php endif; ?>
                        </ul>
                        <?php } ?>
                    </div>

                    <!-- add feedback-form -->
                    <?php
                        $block = module_invoke('webform', 'block_view', 'client-block-38');
                        print render($block['content']);
                    ?>
                </div>
            </div><!--end WRAP-FORM-->
        </footer>
    </div><!--end WRAP-FOOTER-->
<?php endif; ?>
