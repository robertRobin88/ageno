<!-- Page -->
<?php get_header();?>
    <div class="container">
        <div class="row">
            <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col-12">
                    <h1><?php the_title(); ?></h1>
                        <article>
                              <?php the_content(); ?>
                       </article>
                </div>
            <?php endwhile; ?>
            <?php else: ?>
                <div class="col-12">
                    <h1>Nie  znaleziono, spróbój ponownie</h1>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php get_footer();?>

