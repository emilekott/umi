<?php

add_shortcode('vimeo', 'vimeo');

function vimeo($atts) {
    $atts = shortcode_atts(array(
        'id' => '',
        'width' => 940,
        'height' => 529,
            ), $atts);
    //return '<iframe src="http://player.vimeo.com/video/'.$atts['id'].'?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=ed1c24" width="'.$atts['width'].'" height="'.$atts['height'].'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
    return '<div class="videoContainer"><iframe src="http://player.vimeo.com/video/'.$atts['id'].'?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=ed1c24" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>';
    
}
