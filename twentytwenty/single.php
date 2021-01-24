<?php
/**
 * The template for displaying single posts and pages.
 * Template Name: Single page
 * Template Post Type: post, page, product
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */


get_header();
?>
<div class="single">
    <div class="container">
        <div class="col-md-8 single-main">
            <div class="single-grid">
                <?php the_post_thumbnail( 'full' ); ?>
                <p><?php the_content(); ?></p>
            </div>
            <ul class="comment-list">
                <h5 class="post-author_head">Written by <a href="#" title="Posts by <?php the_author_meta( 'display_name', $post->post_author ); ?>" rel="author"><?php the_author_meta( 'display_name', $post->post_author ); ?></a></h5>
                <li><img src="images/avatar.png" class="img-responsive" alt="">
                    <div class="desc">
                        <p>View all posts by: <a href="#" title="Posts by admin" rel="author"><?php the_author_meta( 'display_name', $post->post_author ); ?></a></p>
                    </div>
                    <div class="clearfix"></div>
                </li>
            </ul>
            <div class="comments">
                <h3>RECENT COMMENTS</h3>
                <ul>
                    <?php $recent_comments = get_comments( array(
                        'number'      => 5, // number of comments to retrieve.
                        'post_id' => get_the_ID(),
                        'status'      => 'approve', // we only want approved comments.
                        'post_status' => 'publish' // limit to published comments.
                    ) );

                    if ( $recent_comments ) {
                        foreach ( (array) $recent_comments as $comment ) {
                            echo '<li><a href="' . esc_url( get_comment_link( $comment ) ) . '">' . get_the_title( $comment->comment_post_ID ) . '</a></li>';

                        }
                    } ?>

                </ul>
            </div>
            <div class="content-form">
                <h3>Leave a comment</h3>
                <form>
                    <?php if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif; ?>
                </form>
            </div>
        </div>

        <div class="col-md-4 side-content">
            <div class="recent">
                <h3>RECENT POSTS</h3>
                <ul>
                    <?php
                    $args = array(
                        'numberposts' => 3,
                        'category' => 0,
                        'post_status' => 'publish',
                    );

                    $result = wp_get_recent_posts( $args );

                    foreach( $result as $p ){
                        ?>
                        <li><a href="<?php echo get_permalink($p['ID']) ?>"><?php echo $p['post_title'] ?></a></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="comments">
                <h3>RECENT COMMENTS</h3>
                <ul>
                    <?php $recent_comments = get_comments( array(
                        'number'      => 5, // number of comments to retrieve.
                        'status'      => 'approve', // we only want approved comments.
                        'post_status' => 'publish' // limit to published comments.
                    ) );

                    if ( $recent_comments ) {
                        foreach ( (array) $recent_comments as $comment ) {
                            echo '<li><a href="' . esc_url( get_comment_link( $comment ) ) . '">' . get_the_title( $comment->comment_post_ID ) . '</a></li>';

                        }
                    } ?>
                </ul>
            </div>
            <div class="clearfix"></div>
            <div class="archives">
                <h3>ARCHIVES</h3>
                <ul>
                    <li><a href="#">October 2013</a></li>
                    <li><a href="#">September 2013</a></li>
                    <li><a href="#">August 2013</a></li>
                    <li><a href="#">July 2013</a></li>
                </ul>
            </div>
            <div class="categories">
                <h3>CATEGORIES</h3>
                <ul>
                    <?php
                    $categories = get_categories(array(
                        'number'  => 0,
                        'parent' => 0,
                        'term_group' => 0,
                        'orderby' => 'name',
                        'order' => 'ASC'
                    ));
                    foreach( $categories as $category ){
                        echo '<li> <a href="' .get_category_link( $category->term_id ) . '">' . $category->name.'</a> </li> ';

                    }
                    ?>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>


<!-- #site-content -->


<?php get_footer(); ?>
