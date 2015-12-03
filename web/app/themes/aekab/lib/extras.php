<?php

function get_post_excerpt( $post_or_post_id=null, $length = 100 )
{

    $post   = null;
    $result = "";

    if( !$post_or_post_id ) $post_or_post_id = get_the_ID();

    if (is_object( $post_or_post_id )) {
        $post = $post_or_post_id;
    } else if (is_numeric( $post_or_post_id )) {
        $post = get_post( $post_or_post_id );
    } else {
        return ''; //throw new Exception( '### Error in VcModule/get_post_excerpt, no post nor post_id given! ###' );
    }

    $excerpt = html_entity_decode( $post->post_excerpt );
    if (empty( $excerpt )) {
        $excerpt = html_entity_decode( strip_tags( $post->post_content ) );
    }

    if (strlen( $excerpt ) > $length) {

        $line=$excerpt;
        if (preg_match('/^.{1,' . $length . '}\b/s', $excerpt, $match))
        {
            $line=$match[0];
        }

        $excerpt = $line . '... Läs mer!';
    }
    return wp_kses_post( $excerpt );
}

