<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
*/
//if ( post_password_required() ) {
//	return;
//}

$commenter = wp_get_current_commenter();

$fields =  array(
    'author' =>
        '<input name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .'" size="30" placeholder="Name" required/>',
    'email' =>
        '<input name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .'" size="30" placeholder="Email" required/>',
    'phone' =>
        '<input name="phone" type="text" value="' . esc_attr(  $commenter['comment_author_phone'] ) .'" size="30" placeholder="Phone" required/>',
    'cookies' => '',
);
$args = array(
    'id_form'           => 'commentform',
    'class_form'        => 'comment-form',
    'id_submit'         => 'submit',
    'class_submit'      => 'submit',
    'name_submit'       => 'submit',
    'submit_button'     => '<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="SEND" />',
    'title_reply'       => '',
    'title_reply_to'    => __( 'Reply to %s','text-domain' ),
    'cancel_reply_link' => __( 'Cancel comment','text-domain' ),
    'label_submit'      => __( 'Post comment','text-domain' ),
    'format'            => 'xhtml',
    'comment_field'     =>  '<textarea id="comment" name="comment" placeholder="Message" cols="45" rows="8" aria-required="true">' .'</textarea>',
    'logged_in_as'      => '',
    'comment_notes_before' => '',
    'fields'            => apply_filters( 'comment_form_default_fields', $fields ),
);

function move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}

add_filter( 'comment_form_fields', 'move_comment_field_to_bottom' );

comment_form( $args );
