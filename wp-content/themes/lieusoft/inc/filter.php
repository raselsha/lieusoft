<?php

add_filter('next_post_link_attribute', 'posts_link_attributes');
add_filter('previous_post_link_attribute', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="btn btn-default"';
}

?>