<?php
/* Template Name: Front page */
get_header(); ?>
    <main>
        <div class="banner mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3 d-none d-md-block">
                        <div class="categories-wrapper pb-5">
                            <div class="category-heading">
                                <i></i>
                                <span>Categories</span>
                            </div>

                                <?php
                                $orderby = 'name';
                                $order = 'asc';
                                $hide_empty = false ;
                                $cat_args = array(
                                'orderby'    => $orderby,
                                'order'      => $order,
                                'hide_empty' => $hide_empty,
                                );

                                $product_categories = get_terms( 'product_cat', $cat_args );

                                if( !empty($product_categories) ){
                                echo ' <ul class="categories-items list-unstyled">';
                                    foreach ($product_categories as $key => $category) {
                                    echo '

                                    <li>';
                                        echo '<a href="'.get_term_link($category).'" >';
                                            echo $category->name;
                                            echo '</a>';
                                        echo '</li>';
                                    }
                                    echo '</ul>';
                                }
                                ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-9 d-flex">
                        <div class="banner-content">
                            <div class="featured-deals d-none d-md-block">
                            <?php
                                if ( has_nav_menu( 'featured_deal' ) ) :
                                    wp_nav_menu( array(
                                        'menu'              => __( 'Featured Deals Menu', 'orange'),
                                        'container'       => false,
                                        'theme_location'    => 'featured_deal',
                                        'depth'             => 4,
                                        'menu_class'        => 'featured-deal-menu list-unstyled d-flex',
                                    ));
                                endif;
                            ?>
                            </div>
                            <div class="banner-carusel-wrapper d-block d-sm-flex">
                                <div class="banner-carusel  mt-md-5 mt-2 mb-3 border bg-light mr-3">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <?php $slider = get_posts(array('post_type' => 'sliders', 'posts_per_page' => 5)); ?>
                                            <?php $count = 0; ?>
                                            <?php foreach($slider as $slide): ?>
                                                <div class="carousel-item <?php echo ($count == 0) ? 'active' : ''; ?>">
                                                   <img class="img-fluid d-block w-100" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?>" alt="qcash slide">
                                                </div>
                                                <?php $count++; ?>
                                            <?php endforeach; ?>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="banner-sidebar-collections mt-2 mt-md-5 mb-3">
                                    <h4 class="text-center">Daily Deals</h4>
                                    <ul class="list-unstyled">
                                        <?php
                                        $args = array(
                                            'post_type' => 'product',
                                            'posts_per_page' => 3,
                                            'product_tag' => 'more-to-love',
                                            'orderby' => 'rand'
                                        );
                                        $loop = new WP_Query( $args );
                                        while ( $loop->have_posts() ) : $loop->the_post();
                                            global $product;
                                            ?>
                                            <li class="d-flex">
                                                <div class="item-content w-75">
                                                    <h5><a href="<?php echo get_permalink( $loop->post->ID ) ?>"><?php the_title();?></a></h5>
                                                    <div class="view-more">
                                                        <a href="<?php echo get_permalink( $loop->post->ID ) ?>">Shop Now</a>
                                                    </div>
                                                </div>
                                                <div class="item-banner w-25">
                                                    <a href="<?php echo get_permalink( $loop->post->ID ) ?>">
                                                        <?php if (has_post_thumbnail( $loop->post->ID )):
                                                            the_post_thumbnail('thumbnail',array('class'=>'img-fluid', 'alt'=>'qcash-product-thumb'));
                                                        else: ?>
                                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/personal-care.png" alt="">
                                                        <?php endif; ?>

                                                    </a>

                                                </div>
                                            </li>
                                        <?php  endwhile; wp_reset_query(); ?>



                                    </ul>
                                </div>
                            </div>
                            <ul class="featured-collection-wrapper d-block d-sm-flex">
                                <li class="featured-collection d-block d-md-flex align-items-center">
                                    <div class="collection-img pr-2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/cameras.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="collection-content text-center text-md-left">
                                        <h4>Catch Big <span>Deals</span> on the Cameras</h4>
                                        <a href="#">Shop Now <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </li>
                                <li class="featured-collection d-block d-md-flex  align-items-center">
                                    <div class="collection-img pr-2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/MobileDevicesv2-2.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="collection-content text-center text-md-left">
                                        <h4>Shop the  <span>Hottest</span> Products</h4>
                                        <a href="#">Shop Now <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </li>
                                <li class="featured-collection d-block d-md-flex  align-items-center">
                                    <div class="collection-img pr-2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/360-camers.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="collection-content text-center text-md-left">
                                        <h4>Catch Big <span>Deals</span> Head Phone</h4>
                                        <a href="#">Shop Now <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="daily-needs flash-sale">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="flash-sale-wrapper mb-5">
                            <div class="deal-heading d-flex justify-content-between align-items-center">
                                <h2>Daily Needs</h2>
                                <div class="view-all">
                                    <a href="#">View More</a>
                                </div>
                            </div>

                            <ul class="flash-sale-items daily-need-items d-block d-md-flex list-unstyled my-4">
                                <?php
                                $featured_Product = new WP_Query(
                                    [
                                        'post_type' => 'product',
                                        'posts_per_page'=> 5,
                                        'order'         => 'DSC',
                                        'post__in'      => wc_get_featured_product_ids(),
                                    ]
                                );
                                if ($featured_Product->have_posts()): while ($featured_Product->have_posts()) : $featured_Product->the_post();
                                    get_template_part( 'templates/content', 'product_featured' );
                                endwhile; endif;
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="round-shape-list">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="categories-products bg-white rounded mb-5">
                            <div class="row">
                                <div class="col-12">
                                    <div class="heading-style-2nd mt-3 mb-4">
                                        <ul class="d-flex list-unstyled align-items-center">
                                            <li><a href="#">Explore popular categories</a></li>
                                            <li><a href="#" class="see-all">See All</a> <i class="fa fa-arrow-right ml-2"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <ul class="round-shape-list-items list-unstyled d-block d-lg-flex mb-5">
                                     <?php
                                        $taxonomy     = 'product_cat';
                                        $orderby      = 'name';
                                        $hierarchical = 1;
                                        $number = 7;

                                        $args = array(
                                            'taxonomy'     => $taxonomy,
                                            'orderby'      => $orderby,
                                            'hierarchical' => $hierarchical,
                                            'number' => $number

                                        );
                                        $all_categories = get_categories( $args );

                                        foreach ($all_categories as $cat) {
                                            $popular_category = get_term_meta( $cat->term_id, 'popular_category', true );
                                            if($popular_category == 'yes'){

                                                ?>
                                                <li class="text-center">
                                                    <a href="<?php echo get_category_link($cat->term_id); ?>">
                                                        <?php
                                                        $thumbnail_id = get_term_meta($cat->term_id, 'thumbnail_id', true);
                                                        $image = wp_get_attachment_url( $thumbnail_id );
                                                        ?>
                                                        <img src="<?php echo $image; ?>" class="img-fluid rounded-circle" alt="">
                                                        <h4><?php echo $cat->name; ?></h4>
                                                    </a>
                                                </li>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="flash-sale">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="flash-sale-wrapper mb-5">
                            <div class="deal-heading d-flex justify-content-between align-items-center">
                                <h2>Flash Deals</h2>
                                <div class="view-all">
                                    <a href="#">View More</a>
                                </div>
                            </div>

                            <ul class="flash-sale-items d-block d-md-flex list-unstyled my-4">
                               <?php
                               $flash_sale = array(
                                   'post_type' => 'product',
                                   'orderby'   => 'meta_value',
                                   'posts_per_page'=> 5,
                                   'order' => 'DESC',
                                   'meta_query' => array(
                                       'meta_value' => array(
                                           'key' => '_sale_price',
                                           'type' => 'NUMERIC',
                                           'meta_value !=' => '',
                                       ))

                               );

                               $flash_sales = new WP_Query($flash_sale);
                               if ($flash_sales->have_posts()): while ($flash_sales->have_posts()) : $flash_sales->the_post();
                                  get_template_part( 'templates/content', 'product_flash_sale' );
                               endwhile; endif;
                               ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="new-arrival-products">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="new-arrival-products-wrapper mb-5">
                            <div class="deal-heading d-flex justify-content-between align-items-center">
                                <h2>New Arrival Dress</h2>
                                <div class="view-all">
                                    <a href="#">View More</a>
                                </div>
                            </div>

                            <ul class="new-arrival-product-items d-block d-md-flex list-unstyled my-4">
                                <li>
                                    <div class="product-item-fusion">
                                        <div class="product-thumb">
                                            <a href="#">
                                                <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/dress-1.jpg" class="img-fluid" alt= "">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="#">Baby Powder</a></h4>
                                            <div class="price-content d-flex justify-content-between">
                                                <div class="show-price">
                                                    $500
                                                    <span class="discount-price  text-truncate ml-1">$600</span>
                                                </div>
                                                <div class="price-discount">
                                                    20% off
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-quick-view">
                                            <div class="quick-view-content position-relative">
                                                <h5 class="mb-0">Buy The Product</h5>
                                                <div class="quick-content">
                                                    <div class="select-size py-2 px-2">
                                                        <label for="select-size">Select a Size:</label>
                                                        <ul id="select-size" class="d-inline-block list-unstyled">
                                                            <li><a href="#">S</a></li>
                                                            <li><a href="#">M</a></li>
                                                            <li><a href="#">L</a></li>
                                                            <li><a href="#">XL</a></li>
                                                            <li><a href="#">XXL</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="select-color py-2 px-2">
                                                        <label for="select-color">Select a Color:</label>
                                                        <ul id="select-color" class="d-flex list-unstyled">
                                                            <li><a href="#" class="bg-white">White</a></li>
                                                            <li><a href="#" class="bg-success">Green</a></li>
                                                            <li><a href="#" class="bg-dark">BLACK</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-quantity py-2 px-2">
                                                        <label for="input-number">Quantity:</label>
                                                        <input type="number" class="qty-input w-25" value="0" id="input-number"/>
                                                    </div>
                                                </div>



                                                <a href="#" class="d-block btn-quick-action">Add to Cart</a>
                                            </div>

                                        </div>
                                    </div>

                                </li>
                                <li>
                                    <div class="product-item-fusion">
                                        <div class="product-thumb">
                                            <a href="#">
                                                <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/dress-2.jpg" class="img-fluid" alt= "">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="#">Baby Powder</a></h4>
                                            <div class="price-content d-flex justify-content-between">
                                                <div class="show-price">
                                                    $500
                                                    <span class="discount-price  text-truncate ml-1">$600</span>
                                                </div>
                                                <div class="price-discount">
                                                    20% off
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-quick-view">
                                            <div class="quick-view-content position-relative">
                                                <h5 class="mb-0">Buy The Product</h5>
                                                <div class="quick-content">
                                                    <div class="select-size py-2 px-2">
                                                        <label for="select-size">Select a Size:</label>
                                                        <ul id="select-size" class="d-inline-block list-unstyled">
                                                            <li><a href="#">S</a></li>
                                                            <li><a href="#">M</a></li>
                                                            <li><a href="#">L</a></li>
                                                            <li><a href="#">XL</a></li>
                                                            <li><a href="#">XXL</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="select-color py-2 px-2">
                                                        <label for="select-color">Select a Color:</label>
                                                        <ul id="select-color" class="d-flex list-unstyled">
                                                            <li><a href="#" class="bg-white">White</a></li>
                                                            <li><a href="#" class="bg-success">Green</a></li>
                                                            <li><a href="#" class="bg-dark">BLACK</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-quantity py-2 px-2">
                                                        <label for="input-number">Quantity:</label>
                                                        <input type="number" class="qty-input w-25" value="0" id="input-number"/>
                                                    </div>
                                                </div>



                                                <a href="#" class="d-block btn-quick-action">Add to Cart</a>
                                            </div>

                                        </div>
                                    </div>

                                </li>
                                <li>
                                    <div class="product-item-fusion">
                                        <div class="product-thumb">
                                            <a href="#">
                                                <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/dress-3.jpg" class="img-fluid" alt= "">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="#">Baby Powder</a></h4>
                                            <div class="price-content d-flex justify-content-between">
                                                <div class="show-price">
                                                    $500
                                                    <span class="discount-price  text-truncate ml-1">$600</span>
                                                </div>
                                                <div class="price-discount">
                                                    20% off
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-quick-view">
                                            <div class="quick-view-content position-relative">
                                                <h5 class="mb-0">Buy The Product</h5>
                                                <div class="quick-content">
                                                    <div class="select-size py-2 px-2">
                                                        <label for="select-size">Select a Size:</label>
                                                        <ul id="select-size" class="d-inline-block list-unstyled">
                                                            <li><a href="#">S</a></li>
                                                            <li><a href="#">M</a></li>
                                                            <li><a href="#">L</a></li>
                                                            <li><a href="#">XL</a></li>
                                                            <li><a href="#">XXL</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="select-color py-2 px-2">
                                                        <label for="select-color">Select a Color:</label>
                                                        <ul id="select-color" class="d-flex list-unstyled">
                                                            <li><a href="#" class="bg-white">White</a></li>
                                                            <li><a href="#" class="bg-success">Green</a></li>
                                                            <li><a href="#" class="bg-dark">BLACK</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-quantity py-2 px-2">
                                                        <label for="input-number">Quantity:</label>
                                                        <input type="number" class="qty-input w-25" value="0" id="input-number"/>
                                                    </div>
                                                </div>



                                                <a href="#" class="d-block btn-quick-action">Add to Cart</a>
                                            </div>

                                        </div>
                                    </div>

                                </li>
                                <li>
                                    <div class="product-item-fusion">
                                        <div class="product-thumb">
                                            <a href="#">
                                                <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/dress-4.jpg" class="img-fluid" alt= "">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="#">Baby Powder</a></h4>
                                            <div class="price-content d-flex justify-content-between">
                                                <div class="show-price">
                                                    $500
                                                    <span class="discount-price  text-truncate ml-1">$600</span>
                                                </div>
                                                <div class="price-discount">
                                                    20% off
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-quick-view">
                                            <div class="quick-view-content position-relative">
                                                <h5 class="mb-0">Buy The Product</h5>
                                                <div class="quick-content">
                                                    <div class="select-size py-2 px-2">
                                                        <label for="select-size">Select a Size:</label>
                                                        <ul id="select-size" class="d-inline-block list-unstyled">
                                                            <li><a href="#">S</a></li>
                                                            <li><a href="#">M</a></li>
                                                            <li><a href="#">L</a></li>
                                                            <li><a href="#">XL</a></li>
                                                            <li><a href="#">XXL</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="select-color py-2 px-2">
                                                        <label for="select-color">Select a Color:</label>
                                                        <ul id="select-color" class="d-flex list-unstyled">
                                                            <li><a href="#" class="bg-white">White</a></li>
                                                            <li><a href="#" class="bg-success">Green</a></li>
                                                            <li><a href="#" class="bg-dark">BLACK</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-quantity py-2 px-2">
                                                        <label for="input-number">Quantity:</label>
                                                        <input type="number" class="qty-input w-25" value="0" id="input-number"/>
                                                    </div>
                                                </div>



                                                <a href="#" class="d-block btn-quick-action">Add to Cart</a>
                                            </div>

                                        </div>
                                    </div>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="round-shape-list">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="categories-products bg-white rounded mb-5">
                            <div class="row">
                                <div class="col-12">
                                    <div class="heading-style-2nd mt-3 mb-4">
                                        <ul class="d-flex list-unstyled align-items-center">
                                            <li><a href="#">Explore popular All categories</a></li>
                                            <li><a href="#" class="see-all">See All</a> <i class="fa fa-arrow-right ml-2"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <?php
                                $taxonomy     = 'product_cat';
                                $orderby      = 'name';
                                $number = 8;

                                $args = array(
                                    'taxonomy'     => $taxonomy,
                                    'orderby'      => $orderby,
                                    'hierarchical' => $hierarchical,
                                    'number' => $number

                                );
                                $all_categories = get_categories( $args );

                                foreach ($all_categories as $cat) {
                                    $popular_category = get_term_meta( $cat->term_id, 'popular_category', true );
                                    ?>
                                    <div class="col-12 col-md-3 mb-4">
                                        <div class="category-item">
                                            <h4><a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?></a></h4>
                                            <ul class="list-unstyled d-flex">
                                                <?php
                                                $args = array(
                                                        'post_type' => 'product',
                                                        'posts_per_page' => 3,
                                                        'product_cat' => $cat->slug,
                                                        'orderby' => 'rand'
                                                    );
                                                $loop = new WP_Query( $args );
                                                while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                                                    <li class="d-inline-block">
                                                        <a href="<?php echo get_permalink( $loop->post->ID ) ?>">
                                                            <?php if (has_post_thumbnail( $loop->post->ID )):
                                                                the_post_thumbnail('77x77',array('class'=>'img-fluid', 'alt'=>'qcash-product-thumb'));
                                                            else: ?>
                                                                <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/categories/phone-1.png" class="img-fluid" alt="">
                                                            <?php endif; ?>
                                                        </a>
                                                    </li>
                                                <?php  endwhile; wp_reset_query(); ?>

                                            </ul>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="store-lists">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="store-lists-wrapper mb-5">
                            <div class="deal-heading d-flex justify-content-between align-items-center">
                                <h2>Top Stores</h2>
                                <div class="view-all">
                                    <a href="#">View More</a>
                                </div>
                            </div>
                            <div class="row my-4">
                                <div class="col-12 col-md-4">
                                    <div class="seller-item">
                                        <div class="seller-products d-flex">
                                            <div class="seller-product-single">
                                                <a href="#">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/seller/single-1.png" class="img-fluid" alt="">
                                                </a>
                                            </div>
                                            <div class="seller-product-double">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <a href="#">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/seller/double-1.png" class="img-fluid" alt="">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/seller/double-2.png" class="img-fluid" alt="">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="seller-info mt-2 px-2 d-flex">
                                            <div class="seller-logo">
                                                <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/seller/seller-logo-1.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="seller-name">
                                                <h5><a href="#">Focallure Official Store</a></h5>
                                                <p>Sun glass</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="seller-item">
                                        <div class="seller-products d-flex">
                                            <div class="seller-product-single">
                                                <a href="#">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/seller/single-2.png" class="img-fluid" alt="">
                                                </a>
                                            </div>
                                            <div class="seller-product-double">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <a href="#">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/seller/double-3.png" class="img-fluid" alt="">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/seller/double-4.png" class="img-fluid" alt="">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="seller-info mt-2 px-2 d-flex">
                                            <div class="seller-logo">
                                                <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/seller/seller-logo-2.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="seller-name">
                                                <h5><a href="#">LIGE Official Store</a></h5>
                                                <p>Sun glass</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="seller-item">
                                        <div class="seller-products d-flex">
                                            <div class="seller-product-single">
                                                <a href="#">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/seller/single-3.png" class="img-fluid" alt="">
                                                </a>
                                            </div>
                                            <div class="seller-product-double">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <a href="#">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/seller/double-5.png" class="img-fluid" alt="">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/seller/double-6.png" class="img-fluid" alt="">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="seller-info mt-2 px-2 d-flex">
                                            <div class="seller-logo">
                                                <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/seller/seller-logo-3.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="seller-name">
                                                <h5><a href="#">SULARANTA Official Store</a></h5>
                                                <p>Sun glass</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flash-sale">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="flash-sale-wrapper mb-5">
                            <div class="deal-heading d-flex justify-content-between align-items-center">
                                <h2>More To Love</h2>
                                <div class="view-all">
                                    <a href="#">View More</a>
                                </div>
                            </div>

                            <ul class="flash-sale-items list-unstyled my-4  d-block d-md-flex ">
                                <?php
                                 $args = array(
                                        'post_type' => 'product',
                                        'posts_per_page' => 5,
                                        'product_tag' => 'more-to-love',
                                        'orderby' => 'rand'
                                        );
                                        $loop = new WP_Query( $args );
                                        while ( $loop->have_posts() ) : $loop->the_post();
                                        global $product;
                                        ?>
                                            <li>
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="<?php echo get_permalink( $loop->post->ID ) ?>">
                                                            <?php if (has_post_thumbnail( $loop->post->ID )):
                                                                the_post_thumbnail('thumbnail',array('class'=>'img-fluid', 'alt'=>'qcash-product-thumb'));
                                                            else: ?>
                                                                <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/more-love/1.png" class="img-fluid" alt= "">
                                                            <?php endif; ?>

                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="<?php echo get_permalink( $loop->post->ID ) ?>"><?php the_title();?></a></h4>


                                                        <div class="price-content d-flex justify-content-between">
                                                            <div class="show-price">
                                                                <?php echo get_woocommerce_currency_symbol(); ?>
                                                                <?php echo  $product->sale_price; ?>
                                                                <span class="discount-price  text-truncate ml-1">
                                                                <?php echo get_woocommerce_currency_symbol(); ?>
                                                                <?php echo $product->regular_price; ?>
                                                            </span>
                                                            </div>
                                                            <?php if(!empty($product->sale_price)): ?>
                                                            <div class="price-discount">
                                                                <?php $discountValue = $product->regular_price - $product->sale_price;
                                                                $resultOfPercentageValue = ($discountValue * $product->regular_price) / 100;
                                                                echo number_format((float)$resultOfPercentageValue, 2, '.', ''); ?>
                                                                % off
                                                            </div>
                                                            <?php endif; ?>
                                                        </div>
<!--                                                        <div class="product-actions d-flex justify-content-between">-->
<!--                                                            <div class="product-qty">-->
<!--                                                                <label for="input-number"></label>-->
<!--                                                                <input type="number" class="qty-input" value="0" id="input-number"/>-->
<!--                                                            </div>-->
<!--                                                            <div class="product-add-to-cart">-->
<!--                                                             <a href="#" class="btn">Add to Cart</a>-->
<!--                                                            </div>-->
<!---->
<!--                                                        </div>-->
                                                    </div>
                                                </div>

                                            </li>
                                        <?php  endwhile; wp_reset_query(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="featured-deals">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-7">
                        <div class="featured-band-wrapper">
                            <div class="row d-flex align-items-center">
                                <div class="col-12 col-md-3">
                                    <div class="heading-style-2 ">
                                        <h2 class="mb-3">DEALS</h2>
                                    </div>
                                </div>
                                <div class="col-12 col-md-9">
                                    <div class="heading-style-2 ">
                                        <label class="border-label"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="heading-style-content p-3">
                                        <h4>From 10% OFF</h4>
                                        <p>Deals Going to end in Band:</p>
                                        <ul class="list-unstyled d-flex">
                                            <li>00</li>
                                            <li>00</li>
                                            <li>00</li>
                                            <li>00</li>
                                        </ul>
                                        <a class="see-band-btn" href="#">See All Offers</a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-8">
                                    <div class="product-content">
                                        <ul class="featured-collection-wrapper d-flex">
                                            <li class="featured-collections d-flex align-items-center">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="#">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/cable.jpg" class="img-fluid" alt= "">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="#">Baby Powder</a></h4>
                                                        <div class="price-content d-flex justify-content-between">
                                                            <div class="show-price">
                                                                $500
                                                                <span class="discount-price  text-truncate ml-1">$600</span>
                                                            </div>
                                                            <div class="price-discount">
                                                                20% off
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="featured-collections d-flex align-items-center ml-3">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="#">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/cable.jpg" class="img-fluid" alt= "">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="#">Baby Powder</a></h4>
                                                        <div class="price-content d-flex justify-content-between">
                                                            <div class="show-price">
                                                                $500
                                                                <span class="discount-price  text-truncate ml-1">$600</span>
                                                            </div>
                                                            <div class="price-discount">
                                                                20% off
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="featured-band-wrapper">
                            <div class="row d-flex align-items-center">
                                <div class="col-12 col-md-3">
                                    <div class="heading-style-2 ">
                                        <h2 class="mb-3">Featured Brands</h2>
                                    </div>
                                </div>
                                <div class="col-12 col-md-9">
                                    <div class="heading-style-2 ">
                                        <label class="border-label"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-5">
                                    <div class="heading-style-content p-3">
                                        <p>Deals Going to all band</p>
                                        <a class="see-band-btn" href="#">See All Band</a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <div class="product-content">
                                        <ul class="featured-collection-wrapper list-unstyled d-flex">
                                            <li class="featured-collection">
                                                <div class="collection-img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/cameras.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="collection-content">
                                                    <h4>Catch Big <span>HP</span></h4>
                                                    <a href="#">Shop Now <i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </li>
                                            <li class="featured-collection">
                                                <div class="collection-img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/MobileDevicesv2-2.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="collection-content">
                                                    <h4>Shop the  <span>Hottest</span></h4>
                                                    <a href="#">Shop Now <i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="round-shape-list why-we-are bg-white py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-style-2nd my-5">
                            <ul class="d-flex list-unstyled align-items-center">
                                <li><a href="#">Why Qcash eCommerce?</a></li>
                                <li><a href="#" class="see-all">See All</a> <i class="fa fa-arrow-right ml-2"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="round-shape-list-items list-unstyled d-block d-lg-flex mb-5">


                            <?php $why_choose_us_items =  carbon_get_theme_option('why_choose_us_items'); ?>

                            <?php foreach ($why_choose_us_items as $why_choose_us_item): ?>
                            <li class="d-inline-block text-center">
                                <a href="<?php echo $why_choose_us_item['why_choose_us_link']; ?>">
                                    <?php $image = wp_get_attachment_image_src( $why_choose_us_item['why_choose_us_img'], 'thumbnail' ); ?>

                                    <img src="<?php echo $image[0]; ?>" class="img-fluid rounded-circle" alt="qcash-product">
                                    <h4><?php echo $why_choose_us_item['why_choose_us_label']; ?></h4>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>