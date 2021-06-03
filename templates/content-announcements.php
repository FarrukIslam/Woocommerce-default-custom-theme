<div class="offset-lg-1 col-12 col-lg-10">
    <div class="event-item text-center text-md-left mb-5">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="event-thumb">
                    <div class="date"><?php echo get_the_time('l, F jS, Y ' ); ?></div>
                    <?php
                    if(has_post_thumbnail()):
                        the_post_thumbnail('737x449',array('class'=>'img-fluid'));
                    endif;
                    ?>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="event-content">
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn-read">Read details <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>

    </div><!--event item end-->
</div>