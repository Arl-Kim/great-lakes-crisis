<?php

function no_copy_script() {
    wp_enqueue_script("no-copy", get_template_directory_uri() . "/js/noCopy.js", array(), null, true);
}
add_action("wp_enqueue_scripts", "no_copy_script");