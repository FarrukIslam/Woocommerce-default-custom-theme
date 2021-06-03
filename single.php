<?php get_header();


?>
    <main>
        <div class="woocommerce-template">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                            <?php the_title(); ?>
                        <?php the_content(); ?>
                        <?php endwhile;  endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer();