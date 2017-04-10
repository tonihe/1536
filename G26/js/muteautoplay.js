// Function for setting embedded vimeo video to mute.
$(function() {
    var vimeo_iframe = $('#vimeo_player')[0];
    var player = $f(vimeo_iframe);

    player.addEvent('ready', function() {
        player.api('setVolume', 0);
    });
});