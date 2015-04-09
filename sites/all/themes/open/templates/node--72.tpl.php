<!-- add block Ministry-->
<?php
    $block = module_invoke('views', 'block_view', 'art_ministry-block');
    print render($block['content']);
?>
