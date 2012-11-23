<?php

add_shortcode('vimeo', 'vimeo');

function vimeo($atts) {
    $atts = shortcode_atts(array(
        'id' => '',
        'width' => 940,
        'height' => 529,
        'desc' => "y",
            ), $atts);

    
    if (isset($atts['id'])) {
        $id = $atts['id'];
        $hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$id.php"));
        $description = $hash[0]['description'];
    }
    

    $html = '<div class="videoContainer"><iframe src="http://player.vimeo.com/video/' . $atts['id'] . '?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=ed1c24" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>';
    if ($atts['desc']=="y")   $html .= '<div class="video-description">'.$description."</div>";
    return $html;
}
