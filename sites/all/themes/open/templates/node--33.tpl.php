<section class="wrap-register">
    <div class="register-box">
        <h2>Register for this!</h2>
        <?php
            $block = module_invoke('webform', 'block_view', 'client-block-39');
            print render($block['content']);
        ?>
    </div>
</section>

<div class="reviews-box">
    <!-- add block-reviews -->
    <?php
        $block = module_invoke('views', 'block_view', 'reviews-block');
        print render($block['content']);
    ?>
</div><!--end REVIEWS-BOX-->