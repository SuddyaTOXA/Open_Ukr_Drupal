<article>
    <header>
        <h3><?php print $title; ?></h3>
    </header>

    <div class="video-container">
        <?php
            $url_video = strip_tags(render($content['field_video_link']));
            preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url_video, $match);
            $yt_video_id = $match[1];
        ?>
        <div class="start-video" data-videoid="<?php print $yt_video_id; ?>">
            <img src="http://img.youtube.com/vi/<?php print $yt_video_id; ?>/0.jpg" alt="video">
        </div>
    </div>

    <p><?php print strip_tags(render($content['body']));?></p>
</article>