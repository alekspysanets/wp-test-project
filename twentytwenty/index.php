<?php
get_header();
?>
<div class="content">
    <div class="container">
        <div class="content-grids">
            <div class="col-md-8 content-main">
                <div class="content-grid">
                    <?php
                    if(have_posts()) {
                    while(have_posts()){
                    the_post();
                    ?>
                    <div class="content-grid-info">
                        <?php the_post_thumbnail(''); ?>
                        <div class="post-info">
                            <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <?php the_date(); ?>/<?php comments_number(); ?></h4>
                            <p><?php the_content(); ?> </p>
                            <a href="<?php the_permalink(); ?>"><span></span>READ MORE</a>
                        </div>
                    </div>
                    <?php }
                    }
                    ?>

                </div>
            </div>
            <div class="col-md-4 content-right">
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
</div>

<?php
get_footer();?>
