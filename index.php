
    <?php get_header( );?>
    <!-- Container -->
    <div class="container my-5">
        <div class="row">
            <!-- Article -->
            <!-- <div class="col-9"> -->
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class=" col-12 col-sm-6 col-md-3 mb-3">
                <article>
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
                </article>
            </div>
            <?php endwhile; else : _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); endif; ?>
            <!-- End article -->
            <!-- Aside -->
        <?php get_sidebar(); ?>
        <!-- Aside -->
        </div> 
        <div class="card-body">
                <!-- Pagination -->
                <?php get_template_part( 'template-parts/content', 'pagination' )?>
                <!-- End pagination -->
        </div>   
    </div>        
    
    <!-- End container -->
    <?php get_footer(); ?>