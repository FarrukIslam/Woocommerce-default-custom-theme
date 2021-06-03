<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Qcash">
    <meta name="description" content="Qcash">
    <meta name="author" content="Qcash">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="static/dist/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font-Awesome CSS -->
    <link rel="stylesheet" href="static/dist/vendor/Font-Awesome/css/all.css">
    <!-- Line-Awesome CSS -->
    <link rel="stylesheet" href="static/dist/vendor/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="static/dist/vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="static/dist/vendor/slick/slick-theme.css">
    <link rel="stylesheet" href="static/dist/css/combined.css">
    <title>Ecommerce</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="header-top d-none d-lg-block">
        <div class="container h-100">
            <div class="row d-flex align-items-center h-100">
                <div class="col-12 col-md-4">
                    <div class="header-top-left-navigation">
                        <ul class="list-unstyled header-top-menu-items d-flex">

                            <li class="d-flex signup"><span class="mr-1">Hi!</span><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Sign in','qcash'); ?>"><?php _e('Sign in','qcash'); ?></a> <span class="mx-1">or</span> <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Register','qcash'); ?>"><?php _e('Register','qcash'); ?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-8 d-none d-md-flex justify-content-end">
                    <div class="header-top-right-navigation">
                    <?php
                        if ( has_nav_menu( 'header_top_right_menu' ) ) :
                            wp_nav_menu( array(
                                'menu'              => __( 'Featured Deals Menu', 'qcash'),
                                'container'       => false,
                                'theme_location'    => 'header_top_right_menu',
                                'depth'             => 4,
                                'menu_class'        => 'list-unstyled header-top-menu-items d-flex',
                            ));
                        endif;
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-primary">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-12 col-md-3">
                    <div class="logo text-center text-md-left">
                        <?php echo do_shortcode('[qcash-logo]'); ?>

                    </div>
                </div>
                <div class="col-md-7 col-12 d-flex justify-content-center">
                    <div class="product-search-wrapper w-100 mx-3">
                        <form action="" class="product-search-form d-flex">
                            <label class="search-input">
                                <input type="search" class="search-field" placeholder="Search Your Product ..." value="" name="s" title="" />
                            </label>
                            <label for="category" class="d-none d-md-block">
                                <select id="category">
                                    <option value="Bab">All Categories</option>
                                    <option>Bag</option>
                                </select>
                            </label>
                            <input type="submit" class="search-submit button" value="&#xf002" />
                        </form>
                    </div>
                </div>
                <div class="col-2 d-none d-md-block ">
                    <ul class="product-cart-wrapper list-unstyled pl-5">
                        <li>
                            <a href="#">
                                <i class="fa fa-shopping-basket"></i>
                                <span class="cart-qty">0</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php if(!is_front_page ()): ?>
    <div class="header-secondary primary-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-3">
                    <div class="categories-wrapper">
                        <div class="category-menus">
                            <a href="#">
                                <i class="fa fa-bars mr-2"></i>
                                Categories
                                <i class="fa fa-caret-down ml-2"></i>
                            </a>
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
                </div>
                <div class="col-9">
                    <div class="header-secondary-right-navigation">
                        <?php
                        if ( has_nav_menu( 'header_top_right_menu' ) ) :
                            wp_nav_menu( array(
                                'menu'              => __( 'Featured Deals Menu', 'qcash'),
                                'container'       => false,
                                'theme_location'    => 'header_top_right_menu',
                                'depth'             => 4,
                                'menu_class'        => 'list-unstyled header-secondary-menu-items d-flex',
                            ));
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</header>