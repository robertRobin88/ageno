 <!-- index  -->
<?php get_header() ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row topMarginMainPage">
                    <div class="col-12 col-lg-6 leftTextTop">
                        <h1>Wdrożenia sklepów internetowych Magento</h1>
                        <p>Specjalizujemy się w zintegrowanych systemach e-commerce poprzez audyty, analizy, projektowanie UI/UX, wdrożenie, integracje, optymalizacje, rozwój i utrzymanie.</p>
                    <button class="buttonTopMainPage">STWÓRZMY RAZEM PROJEKT</button>
                    </div>
                    <div class="col-12 col-lg-6 topPageSvgPicture">
                        <img src="<?php bloginfo('template_url')?>/dist/img/ageno.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="clearfixTop"></div>
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