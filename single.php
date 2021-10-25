<?php get_header( );?>
    <!-- Article container -->
    <div class="container">
        <div class="row">
            <!-- Article -->
            <div class="col-12 col-md-9 my-5">
                <!-- check if the post or page has a Featured Image assigned to it. -->
                <!-- <?php 
                    // Must be inside a loop.
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    }
                    else {
                        echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
                            . '/images/article.png" />';
                    }
                ?> -->
                <!-- <img src="images/article.png" alt="" class="img-fluid"> -->
                <h2 class="my-3 "><?php the_title();?></h2>
                <p class="lead"><?php the_time('F j, Y'); ?></p>
                <div class="text-justify">
                    <?php the_content();?>
                </div>
            </div>
            <!-- End article -->
            <!-- Aside -->
        <?php get_sidebar(); ?>
        <!-- Aside -->
            <!-- End aside -->
        </div>
    </div>
    <!-- End article container -->

    <?php get_footer(); ?>