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

            </div>

            <div class="wrap-form">
                <div class="wrap-box">
                    <div class="wrap-copy">
                        <p class="copyright">Copyrights enim ad minim veniam, quis nostrud exerci tation ullamcorper
                            suscipit lobortis nisl ut aliquip iusto odio dignissim qui blandit praesent lupt.</p>

                        <ul class="list-social">
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                    Facebook
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                    Twitter
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-youtube-play"></i>
                                    YouTube
                                </a>
                            </li>
                        </ul>
                    </div>

                    <form class="feedback-form" name="feedback" method="post">
                        <fieldset>
                            <legend>Get in touch</legend>

                            <ul class="clear">
                                <li>
                                    <textarea class="input form-msg" name="text" placeholder="Your message"></textarea>
                                </li>

                                <li>
                                    <input class="input form-email" type="email" name="email" placeholder="Email">
                                    <button class="input btn-send feedback" type="submit">Send</button>
                                </li>
                            </ul>
                        </fieldset>
                    </form>
                </div>
                <?php print $content; ?>
            </div><!--end WRAP-FORM-->
        </footer>
    </div><!--end WRAP-FOOTER-->
<?php endif; ?>
