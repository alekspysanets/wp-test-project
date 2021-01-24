<?php
/**
 * The template for displaying single posts and pages.
 * Template Name: About
 * Template Post Type: post, page, product
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */


get_header();
?>

<div class="about-content">
    <div class="container">
        <h2><?php the_title(); ?></h2>
        <div class="about-section">
            <div class="about-grid">
                <?php the_content(); ?>
            </div>
            <div class="about-grid2">
                <h3>WHY YOU SHOULD READ THIS BLOG?</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.</p>
                <ul>
                    <li><a href="#">Always free from repetition</a></li>
                    <li><a href="#">Vestibulum rhoncus nibh quis dui fermentum iaculis.</a></li>
                    <li><a href="#">The standard chunk of Lorem Ipsum</a></li>
                    <li><a href="#">In consequat dolor in lorem egestas ultrices.</a></li>
                    <li><a href="#">Ultrices rhoncus nibh quis dui.</a></li>
                </ul>
            </div>
            <div class="who-iam">
                <h3>WHO THE IAM?</h3>
                <div class="man-info">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                    <h4>Some facts about me.</h4>
                    <li>Nullam at turpis a orci pretium pharetra.</li>
                    <li>Curabitur tincidunt purus mollis facilisis placerat.</li>
                    <li>Mauris a nulla ac est tincidunt interdum.</li>
                    <li>Pellentesque vel enim nec urna imperdiet mollis.</li>
                    <li>Integer interdum risus et scelerisque volutpat.</li>
                </div>
                <div class="man-pic">
                    <img src="../wp-content/themes/twentytwenty/assets/images/man.jpg" alt=""/>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div><!-- #site-content -->


<?php get_footer(); ?>
