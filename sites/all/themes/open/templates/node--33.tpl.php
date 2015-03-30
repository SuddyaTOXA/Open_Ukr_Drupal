<section class="wrap-register">
    <div class="register-box">
        <h2>Register for this!</h2>
        <form class="register-form">
            <fieldset>
                <legend>Some text about this field</legend>
                <ul class="list-imputs">
                    <li>
                        <input type="text" placeholder="Some text">
                    </li>
                    <li>
                        <input type="text" placeholder="Another text">
                    </li>
                    <li>
                        <input type="text" placeholder="One more text">
                    </li>
                    <li>
                        <input type="text" placeholder="Some text">
                    </li>
                    <li>
                        <input type="submit" value="Submit">
                    </li>
                </ul>
            </fieldset>
        </form>
    </div>
</section>

<div class="reviews-box">

    <?php
        $block = module_invoke('views', 'block_view', 'reviews-block');
        print render($block['content']);
    ?>
<!---->
<!--    <div class="wrap-box">-->
<!--        <ul class="list-reviews list-three-columns">-->
<!--            <li>-->
<!--                <div class="review-text">-->
<!--                    <h3>Title of text</h3>-->
<!--                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod-->
<!--                        tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>-->
<!--                </div>-->
<!---->
<!--                <div class="review-author">-->
<!--                    <span class="author-photo">-->
<!--                        <img src="--><?php //echo path_to_theme(); ?><!--/images/photo.png" alt="Marta Stuart">-->
<!--                    </span>-->
<!--                    <span class="author-name">Marta Stuart,</span>-->
<!--                    <span class="about-author">SEO Charity Music</span>-->
<!--                </div>-->
<!--            </li>-->
<!---->
<!--            <li>-->
<!--                <div class="review-text">-->
<!--                    <h3>Title of text</h3>-->
<!--                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod-->
<!--                        tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>-->
<!--                </div>-->
<!---->
<!--                <div class="review-author">-->
<!--                    <span class="author-photo">-->
<!--                        <img src="--><?php //echo path_to_theme(); ?><!--/images/photo.png" alt="Marta Stuart">-->
<!--                    </span>-->
<!--                    <span class="author-name">Marta Stuart,</span>-->
<!--                    <span class="about-author">SEO Charity Music</span>-->
<!--                </div>-->
<!--            </li>-->
<!---->
<!--            <li>-->
<!--                <div class="review-text">-->
<!--                    <h3>Title of text</h3>-->
<!--                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod-->
<!--                        tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>-->
<!--                </div>-->
<!---->
<!--                <div class="review-author">-->
<!--                    <span class="author-photo">-->
<!--                        <img src="--><?php //echo path_to_theme(); ?><!--/images/photo.png" alt="Marta Stuart">-->
<!--                    </span>-->
<!--                    <span class="author-name">Marta Stuart,</span>-->
<!--                    <span class="about-author">SEO Charity Music</span>-->
<!--                </div>-->
<!--            </li>-->
<!--        </ul><!--end LIST-REVIEWS-->-->
<!--    </div>-->
<!--    -->
</div><!--end REVIEWS-BOX-->