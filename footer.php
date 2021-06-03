<footer class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="footer-items-wrapper list-unstyled d-block d-md-flex">
                   <?php if ( is_active_sidebar( 'footer_1' ) ): ?>
                    <li>
                       <?php dynamic_sidebar( 'footer_1' );?>
                    </li>
                   <?php endif; ?>
                   <?php if ( is_active_sidebar( 'footer_2' ) ): ?>
                   <li>
                       <?php dynamic_sidebar( 'footer_2' ); ?>
                   </li>
                   <?php endif; ?>
                    <?php
                    if ( is_active_sidebar( 'footer_3' ) ): ?>
                    <li>
                        <?php dynamic_sidebar( 'footer_3' );?>
                    </li>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer_4' ) ): ?>
                    <li>
                        <?php dynamic_sidebar( 'footer_4' ); ?>
                    </li>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer_5' ) ): ?>
                    <li>
                        <?php dynamic_sidebar( 'footer_5' ); ?>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="copyright d-block d-lg-flex my-5 align-items-center">
                    <?php
                    $footerCopyRightContent = carbon_get_theme_option('footer_copy_right_text');
                    ?>
                    <?php if(!empty($footerCopyRightContent)):?>
                        <p class="mb-0">
                            <?php _e($footerCopyRightContent,'qcash'); ?>
                        </p>
                        <?php
                    endif;
                    ?>

                    <?php
                    if ( has_nav_menu( 'copyright_menu' ) ) :
                        wp_nav_menu( array(
                            'menu'              => __( 'Footer Copyright Menu', 'qcash'),
                            'container'       => false,
                            'theme_location'    => 'copyright_menu',
                            'depth'             => 4,
                            'menu_class'        => 'list-unstyled copy-right-link-lists d-block d-md-flex',
                        ));
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End footer -->
<?php wp_footer(); ?>
</body>
</html>
