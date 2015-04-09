<!-- add block Relegion-->
<?php
    $block = module_invoke('views', 'block_view', 'art_religion-block');
    print render($block['content']);
?>