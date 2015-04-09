<!-- add block Culture-->
<?php
    $block = module_invoke('views', 'block_view', 'art_culture-block');
    print render($block['content']);
?>