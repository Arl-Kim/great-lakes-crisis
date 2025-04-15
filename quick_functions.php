<?php

/**
 * Custom UM Subscription form validation
 */
function um_custom_validate_name_sense( $key, $array, $args ) {
    if ( isset( $args[$key] ) ) {
        $name = $args[$key];

        // Validation rules:
        // 1. The name must only contain alphabetic characters.
        // 2. The name must not have more than two uppercase letters.
        // 3. The name must not mix uppercase letters in a way that suggests gibberish.
        if ( 
            !preg_match('/^[a-zA-Z]+$/', $name) || // Only alphabetic characters
            preg_match_all('/[A-Z]/', $name, $matches) > 2 || // More than 2 uppercase letters
            preg_match('/[A-Z][a-z]*[A-Z]/', $name) // Random mix of uppercase within lowercase
        ) {
            UM()->form()->add_error( $key, __( 'Please enter a valid name!', 'ultimate-member' ) );
        }
    }
}
add_action( 'um_custom_field_validation_validate_name_sense', 'um_custom_validate_name_sense', 30, 3 );

/**
 * Enqueue no-copy-paste scripts
 */
function no_copy_script() {
    wp_enqueue_script("no-copy", get_template_directory_uri() . "/js/noCopy.js", array(), null, true);
}
add_action("wp_enqueue_scripts", "no_copy_script");

/**
 * Specify default content for posts
 */
add_filter( "default_content", "my_editor_content" );
function my_editor_content( $content ) {
    $content .= '[gtranslate]';
    return $content;
}