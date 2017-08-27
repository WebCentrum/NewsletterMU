var videoId = window.location.hash;

window.onYouTubeIframeAPIReady = function() {
    player = new YT.Player(videoId.split('#')[1],
    {
        events: {
            'onReady': 'onPlayerReady'
        }
    });
}

window.onPlayerReady = function(event) {
    event.target.playVideo();
}

$(function(){
    // document ready

    if (window.location.hash && window.location.hash.match('muni-gallery')) {
        var hash = window.location.hash;
        var galleryId = hash.substring(0, hash.lastIndexOf('-'));
        var $gallery = $(galleryId);

        $('html, body').scrollTop($gallery.offset().top);
    }

    if (window.location.hash && window.location.hash.match('muni-video') && $(videoId).length) {
        var tag = document.createElement('script');
        var firstScriptTag = document.getElementsByTagName('script')[0];
        tag.src = 'https://www.youtube.com/iframe_api';
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    }

    $('[data-fancybox]').fancybox();
});