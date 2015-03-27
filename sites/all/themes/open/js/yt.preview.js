$(document).ready(function(){
    // YouTube previews
    $('.start-video').click(function(){
        var id = $(this).attr('data-videoid');
        $(this).parent('.video-container').html('<iframe width="480" height="360" src="http://www.youtube.com/embed/'+ id +'?autoplay=1" frameborder="0" allowfullscreen></iframe>');
    });
});