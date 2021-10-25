<!-- Container -->
    <div class="container my-5">
        <div class="row">
            <!-- Article -->
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class=" col-12 col-sm-6 col-md-4 mb-3">
                <div class="card">
                <!-- check if the post or page has a Featured Image assigned to it. -->
                <?php 
                    // Must be inside a loop.
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail('post-thumbnails', array(
                            'class' => 'card-img-top'
                        ));
                    }
                    else {
                        echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
                            . '/images/article.png" />';
                    }
                ?>
                    <!-- <img class="card-img-top" src="images/article.png" alt="Card image cap"> -->
                    <div class="card-body">
                        <a href="<?php the_permalink();?>">
                            <h5 class="card-title"><?php the_title();?></h5>
                    </a>
                        <?php the_excerpt();?>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><?php the_category('-');?> / <?php the_time('F j, Y'); ?> / <?php the_author();?></small>
                    </div>
                </div>
            </div>
            <?php endwhile; else : _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); endif; ?>
            <!-- End article -->
        </div>
    </div>
    <!-- End container -->
    <!-- Aside -->
    <div class="col-12 col-md-3">
        <div class="my-3">
            <h3>Lorem, ipsum.</h3>
            <img src="images/article.png" alt="" class="img-fluid">
        </div>
        <div class="my-3">
            <h3>Lorem, ipsum.</h3>
            <img src="images/article.png" alt="" class="img-fluid">
        </div>
        <div class="my-3">
            <h3>Lorem, ipsum.</h3>
            <img src="images/article.png" alt="" class="img-fluid">
        </div>
    </div>
    <!-- End aside -->
    </div>
    </div>
    <!-- End article container -->