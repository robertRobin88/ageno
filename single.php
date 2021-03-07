<!-- single template -->
<?php get_header();?>
    <div class="thumbnailImage">
        <?php the_post_thumbnail() ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-4 sidebarLeft">
                <?php get_sidebar();?>
            </div>
            <div class="col-12 col-xl-8">
                <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="col-12">
                        <h1 class="articleTitle"><?php the_title(); ?></h1>
                             <article>
                                 <?php the_content(); ?>
                            </article>
                    </div>
                <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>