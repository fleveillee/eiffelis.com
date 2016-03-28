
<div style="margin: 0 auto 0;">
    <h1><a href="/">Move Along</a>,</h1>
    <h2>Nothing to see here</h2>

    <iframe id="video" width="480" height="360" src="//www.youtube-nocookie.com/embed/qsvbYKr19ng?rel=0&autoplay=1&html5=1" frameborder="0" allowfullscreen></iframe>
</div>
<script>
$(function(){
$('#video').css({ width: $(window).innerWidth() + 'px', height: $(window).innerHeight() + 'px' });

// If you want to keep full screen on window resize
$(window).resize(function(){
$('#video').css({ width: $(window).innerWidth() + 'px', height: $(window).innerHeight() + 'px' });
});
});
</script>