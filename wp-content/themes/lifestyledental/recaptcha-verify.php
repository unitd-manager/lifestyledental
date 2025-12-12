<?php
/**
 * Verify user via reCAPTCHA v3
 *
 * @package lifestyledental
 * @author Pop Creative
 */

$content_type = isset( $_SERVER['CONTENT_TYPE'] ) ? trim( $_SERVER['CONTENT_TYPE'] ) : '';

if ('application/json' === $content_type) {
    $decoded_content = json_decode(
        trim(
            file_get_contents( 'php://input' )
        ),
        true
    );

    if ( ! is_array( $decoded_content ) ) {
        echo json_encode( 'JSON is invalid.' );
        exit;
    }

    if ( isset( $decoded_content['googleToken'] ) ) {
        require_once( '../../../wp-load.php' );

        $googles_decision = wp_remote_post(
            'https://www.google.com/recaptcha/api/siteverify',
            array(
                'method'  => 'POST',
                'headers' => array( 'Content-Type' => 'application/x-www-form-urlencoded' ),
                'body'    => array(
                    'secret'   => '6LfLgnIcAAAAAFekdy3Quq4t4s2KhabuIBNzLL1n',
                    'response' => $decoded_content['googleToken'],
                )
            )
        );

        echo json_encode( $googles_decision['body'] );
        exit;
    }
}
