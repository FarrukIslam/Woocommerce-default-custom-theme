<?php
if (!defined('QCASH_THEME_VERSION')) define('QCASH_THEME_VERSION', '1.0');
require_once (get_template_directory() . '/lib/ThemeOptions.php');
require_once (get_template_directory() . '/lib/ThemeOptions/GeneralSettings.php');
require_once (get_template_directory() . '/lib/ThemeOptions/BusinessSettings.php');
require_once (get_template_directory() . '/lib/ThemeOptions/GoogleSettings.php');
require_once (get_template_directory() . '/lib/ThemeOptions/widgetSettings.php');
require_once (get_template_directory() . '/lib/ThemeOptions/LandingPageSettings.php');
require_once (get_template_directory() . '/lib/inc/class-custom-post-type.php');

if (!class_exists('QcashThemeSetup'))
{
    class QcashThemeSetup {

        public function __construct() {
            add_action('after_setup_theme', array($this, 'QcashAfterThemeSetup'));
            add_action('wp_enqueue_scripts', array( $this, 'QcashEnqueueScripts' ));
            add_action('widgets_init', array($this, 'QcashWidgetsInitSetup'));
            new \Qcash\ThemeOptions();
        }

        public function QcashEnqueueScripts() {

            /*
            * Enqueue css Files
            */
            wp_enqueue_style('fontawesome-all', get_template_directory_uri() . '/static/dist/vendor/Font-Awesome/css/all.css', array() , QCASH_THEME_VERSION);
            wp_enqueue_style('line-awesome', get_template_directory_uri() . '/static/dist/vendor/line-awesome/css/line-awesome.min.css', array() , QCASH_THEME_VERSION);
            wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/static/dist/vendor/bootstrap/css/bootstrap.min.css', array() , QCASH_THEME_VERSION);
            wp_enqueue_style('slick', get_template_directory_uri() . '/static/dist/vendor/slick/slick.css', array() , QCASH_THEME_VERSION);
            wp_enqueue_style('slick-theme', get_template_directory_uri() . '/static/dist/vendor/slick/slick-theme.css', array() , QCASH_THEME_VERSION);
            wp_enqueue_style('main', get_template_directory_uri() . '/static/dist/css/combined.css', array() , QCASH_THEME_VERSION);
            wp_enqueue_style( 'stylesheet', get_stylesheet_uri() );

            /*
             * Enqueue jQuery Files
             */
            wp_enqueue_script('jQuery');
            wp_enqueue_script( 'popper-min','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array( 'jquery' ),'',true );
            wp_enqueue_script('bootstrap-min', get_template_directory_uri() . '/static/dist/vendor/bootstrap/js/bootstrap.min.js', array(
                'jquery'
            ) , QCASH_THEME_VERSION, true);
            wp_enqueue_script('slick-min', get_template_directory_uri() . '/static/dist/vendor/slick/slick.js', array(
                'jquery'
            ) , QCASH_THEME_VERSION, true);
            wp_enqueue_script('site', get_template_directory_uri() . '/static/dist/js/combined.js', array(
                'jquery'
            ) , QCASH_THEME_VERSION, true);
        }

        public function QcashAfterThemeSetup() {

            remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
            remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );


            require get_template_directory() . '/lib/required_plugins.php';
            require get_template_directory() . '/lib/inc/class-menu-item-custom-fields.php';
            require get_template_directory() . '/lib/inc/class-custom-fields-in-categories.php';
            /*
             * load text domain
             */
            load_theme_textdomain('qcash', get_template_directory() . '/languages');

            /*
             * theme supports
             */
            add_theme_support( 'post-thumbnails', array( 'post','page', 'members','galleries', 'events') );
            add_theme_support('title-tag');
            add_image_size( '270x170',  270, 170, true );
            add_image_size( '77x77',  77, 77, true );

            /**
             * Beaver builder support
             **/
            add_theme_support('fl-theme-builder-headers');
            add_theme_support('fl-theme-builder-footers');
            add_theme_support('fl-theme-builder-parts');

            /*
            * register nav
            */
            register_nav_menus(array(
                'header_top_right_menu' => __('Header Top Right Menu', 'qcash'),
                'featured_deal' => __('Featured Deals', 'qcash'),
                'primary_menu' => __('Primary Menu', 'qcash'),
                'buy_footer' => __('Footer Menu Buy', 'qcash'),
                'sale_footer' => __('Footer Menu Sale', 'qcash'),
                'tools_apps_footer' => __('Footer Menu Tools & Apps', 'qcash'),
                'companies_footer' => __('Footer Menu Companies', 'qcash'),
                'stay_connected_footer' => __('Footer Menu Stay Connected', 'qcash'),
                'about_site_footer' => __('Footer Menu About site', 'qcash'),
                'help_contact_footer' => __('Footer Menu Help & Contact', 'qcash'),
                'community_footer' => __('Footer Menu Community', 'qcash'),
                'copyright_menu' => __('Footer Copyright Menu', 'qcash'),
                'company_links' => __('Company Link Menu', 'qcash'),
                'useful_links' => __('Useful Link Menu', 'qcash')
            ));

            /** Woocommerce Support */
            add_theme_support( 'woocommerce' );
            add_theme_support( 'wc-product-gallery-zoom' );
            add_theme_support( 'wc-product-gallery-slider' );
        }

        /*
        * QcashWidgetsInitSetup
        * @sideber Register
        * @return mixed
        */
        public function QcashWidgetsInitSetup() {
            if ( function_exists('register_sidebar') )
                register_sidebar( array(
                    'name' => __( 'Page Sidebar', 'qcash' ),
                    'id' => 'page-sidebar',
                    'description' => __( 'Widgets in this area will be shown on page sidebar area.', 'qcash' ),
                    'before_widget' => '<div class="page-item-sidebar widget mb-3 %2$s">',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h4 class="page-sidebar-title widget-title">',
                    'after_title'   => '</h4>',
                ) );
            register_sidebar( array(
                'name' => __( 'Footer 1', 'qcash' ),
                'id' => 'footer_1',
                'description' => __( 'Widgets in this area will be shown on footer sidebar area.', 'qcash' ),
                'before_widget' => '<div class="footer-item">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4>',
                'after_title'   => '</h4>',
            ) );
            register_sidebar( array(
                'name' => __( 'Footer 2', 'qcash' ),
                'id' => 'footer_2',
                'description' => __( 'Widgets in this area will be shown on footer sidebar area.', 'qcash' ),
                'before_widget' => '<div class="footer-item">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4>',
                'after_title'   => '</h4>',
            ) );
            register_sidebar( array(
                'name' => __( 'Footer 3', 'qcash' ),
                'id' => 'footer_3',
                'description' => __( 'Widgets in this area will be shown on footer sidebar area.', 'qcash' ),
                'before_widget' => '<div class="footer-item">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4>',
                'after_title'   => '</h4>',
            ) );
            register_sidebar( array(
                'name' => __( 'Footer 4', 'qcash' ),
                'id' => 'footer_4',
                'description' => __( 'Widgets in this area will be shown on footer sidebar area.', 'qcash' ),
                'before_widget' => '<div class="footer-item">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4>',
                'after_title'   => '</h4>',
            ) );
            register_sidebar( array(
                'name' => __( 'Footer 5', 'qcash' ),
                'id' => 'footer_5',
                'description' => __( 'Widgets in this area will be shown on footer sidebar area.', 'qcash' ),
                'before_widget' => '<div class="footer-item">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4>',
                'after_title'   => '</h4>',
            ) );

        }


    }

}
if (class_exists('QcashThemeSetup'))
{
    $opt = new QcashThemeSetup();
}
