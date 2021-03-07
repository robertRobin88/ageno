 <!-- index  -->
<?php get_header() ?>
    <div class="container">
        <div class="row">
            <?php if (have_posts()) :
             while (have_posts()) : the_post();
                $post_id = get_the_ID(); ?>
                <div class="col-12 col-md-4 mb-4 postsMain">
                    <div class="item-news">
                      <?php if (has_post_thumbnail()):
                         the_post_thumbnail('img-news', array('class' => 'img-fluid imgThumbnail'));
                     endif;?>
                     <div class="news-desc">
                        <div class="clearfix"></div>
                        <h4>
                            <a href="<?php the_permalink(); ?>">
                               <?php
                               echo wp_trim_words(get_the_title(), 10, '...');
                               ?>
                           </a>
                       </h4>
                </div>
            </div>
        </div>
         <?php endwhile; ?>
         <?php endif; ?>
                <div class="clearfix"></div>
        </div>
    </div>
<?php get_footer() ?>