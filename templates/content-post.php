<div class="col-12 col-md-6 col-lg-4 mb-4">
    <div class="event-item">
        <div class="event-thumb">
            <?php
            if(has_post_thumbnail()):
                the_post_thumbnail('737x449',array('class'=>'img-fluid'));
            endif;
            ?>
        </div>
        <div class="event-content">
            <p class="date">by <span><?php the_author(); ?></span> | <?php echo get_the_time('M jS, Y' ); ?></p>
            <h3><?php the_title(); ?></h3>
            <p class="mb-4"><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn-read">Read details <i class="fa fa-angle-double-right"></i></a>
        </div>
    </div>
</div>