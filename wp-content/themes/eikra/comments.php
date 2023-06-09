<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

add_filter( 'comment_form_fields', 'rdtheme_move_comment_field_to_bottom' );
function rdtheme_move_comment_field_to_bottom( $fields ) {
    $temp = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $temp;
    return $fields;
}

if ( post_password_required() ) {
    return;
}
?>
<div id="comments" class="comments-area">
    <?php if ( have_comments() ): ?>
        <?php
        $rdtheme_comment_count = get_comments_number();
        $rdtheme_comments_text = '(' .number_format_i18n( $rdtheme_comment_count ) . ') ';
        if ( $rdtheme_comment_count > 1 ) {
            $rdtheme_comments_text .= esc_html__( 'Comments', 'eikra' );
        }
        else{
            $rdtheme_comments_text .= esc_html__( 'Comment', 'eikra' );
        }
        ?>
        <h3 class="comment-title"><?php echo esc_html( $rdtheme_comments_text );?></h3>
        <?php
        $rdtheme_avatar = get_option( 'show_avatars' );
        ?>
        <ul class="comment-list<?php echo empty( $rdtheme_avatar ) ? ' avatar-disabled' : '';?>">
            <?php
            wp_list_comments(
                array(
                    'style'        => 'ul',
                    'callback'     => 'RDTheme_Helper::comments_callback',
                    'reply_text'   => esc_html__( 'Reply', 'eikra' ),
                    'avatar_size'  => 64,
                    'format'       => 'html5'
                ) 
            );
            ?>
        </ul>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :?>
            <nav class="pagination-area comment-pagination">
                <ul>
                    <li><?php previous_comments_link( esc_html__( 'Older Comments', 'eikra' ) ); ?></li>
                    <li><?php next_comments_link( esc_html__( 'Newer Comments', 'eikra' ) ); ?></li>
                </ul>
            </nav>
        <?php endif;?>

    <?php endif;?>
    
    <?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
        <p class="comments-closed"><?php esc_html_e( 'Comments are closed.', 'eikra' ); ?></p>
    <?php endif;?>

    <?php
    // Start displaying Comment Form
    $rdtheme_commenter = wp_get_current_commenter();		
    $rdtheme_req = get_option( 'require_name_email' );
    $rdtheme_aria_req = ( $rdtheme_req ? " required" : '' );

    $rdtheme_fields =  array(
        'author' =>
        '<div class="row"><div class="col-sm-4"><div class="form-group comment-form-author"><input type="text" id="author" name="author" value="' . esc_attr( $rdtheme_commenter['comment_author'] ) . '" placeholder="'.esc_attr__( 'Name', 'eikra' ).( $rdtheme_req ? ' *' : '' ).'" class="form-control"' . $rdtheme_aria_req . '></div></div>',

        'email' =>
        '<div class="col-sm-4 comment-form-email"><div class="form-group"><input id="email" name="email" type="email" value="' . esc_attr(  $rdtheme_commenter['comment_author_email'] ) . '" class="form-control" placeholder="'.esc_attr__( 'Email', 'eikra' ).( $rdtheme_req ? ' *' : '' ).'"' . $rdtheme_aria_req . '></div></div>',	

        'url' =>
        '<div class="col-sm-4 comment-form-website"><div class="form-group"><input id="website" name="website" type="text" value="' . esc_attr(  $rdtheme_commenter['comment_author_url'] ) . '" class="form-control" placeholder="'.esc_attr__( 'Website', 'eikra' ).( $rdtheme_req ? '' : '' ).'"' . $rdtheme_aria_req . '></div></div></div>',
    );

    $rdtheme_args = array(
        'class_submit'  => 'submit btn-send',
        'submit_field'  => '<div class="form-group form-submit">%1$s %2$s</div>',
        'comment_field' =>  '<div class="form-group comment-form-comment"><textarea id="comment" name="comment" required placeholder="'.esc_attr__( 'Comment *', 'eikra' ).'" class="textarea form-control" rows="10" cols="40"></textarea></div>',
        'fields' => apply_filters( 'comment_form_default_fields', $rdtheme_fields ),
    );
    ?>
    <div class="reply-separator"></div>
    <?php comment_form( $rdtheme_args );?>
</div>