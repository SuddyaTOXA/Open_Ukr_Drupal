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
                    $block = module_invoke('block', 'block_view', '1');
                    print render($block['content']);
                ?>
            </div>

            <div class="wrap-form">
                <div class="wrap-box">
                    <div class="wrap-copy">
                        <p class="copyright">Copyrights enim ad minim veniam, quis nostrud exerci tation ullamcorper
                            suscipit lobortis nisl ut aliquip iusto odio dignissim qui blandit praesent lupt.</p>

                        <div class="list-social">
                            <!-- add social links -->
                            <?php
                                $block = module_invoke('widgets', 'block_view', 's_socialmedia_profile-default');
                                print render($block['content']);
                            ?>
                        </div>
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
