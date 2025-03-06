<?php

add_filter( "default_content", "my_editor_content" );
function my_editor_content( $content ) {
    $content .= '[gtranslate]';
    return $content;
}