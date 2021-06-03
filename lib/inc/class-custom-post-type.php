<?php
namespace Qcash;
Class CustomPostType{

    public function __construct()
    {
        add_action('init', [ $this, 'heroSliderInit' ]);
        add_action('init', [ $this, 'teamMembersInit' ]);
        add_action('init', [ $this, 'packageListInit' ]);
        add_action('init', [ $this, 'servicesListInit' ]);
        add_action('init', [ $this, 'testimonialsInit' ]);
        add_action('init', [ $this, 'clientLogoInit' ]);

        add_action( 'manage_sliders_posts_custom_column', [$this, 'heroSliderColumns'], 10, 9 );
        add_filter('manage_edit-sliders_columns', [ $this, 'qcashEditheroSliderColumns' ]);

        add_action( 'manage_team_members_posts_custom_column', [$this, 'teamMembersColumns'], 10, 9 );
        add_filter('manage_edit-team_members_columns', [ $this, 'qcashEditTeamMembersColumns' ]);

        add_action( 'manage_client_logo_posts_custom_column', [$this, 'clientLogoColumns'], 10, 9 );
        add_filter('manage_edit-client_logo_columns', [ $this, 'qcashEditClientLogoColumns' ]);
    }

    /*
     * custom post type Teams
     */
    public function heroSliderInit()
    {

        register_post_type('sliders', [
            'labels'            => [
                'name'                      => 'Sliders',
                'singular_name'     => 'Slider',
                'all_items'             => 'All Banner Sliders',
                'add_new'                   => 'Add New Banner Slider',
                'add_new_item'      => 'Add New Banner Slider'
            ],
            'public'            => true,
            'has_archive'   => true,
            'menu_icon'           => 'dashicons-format-gallery',
            'hierarchical'       => false,
            'rewrite'           => [ 'slug' => 'hero-slider' ],
            'supports'      => [ 'title','editor','thumbnail'],
            'show_ui' => true,
        ]);
    }
    public function qcashEditheroSliderColumns( $columns )
    {
        $columns = array(
            'cb' => '<input type="checkbox" />',
            'title' => __('Slider Name', 'qcash'),
            'image' => __('Slider Images', 'qcash'),
            'slider_desc' => __('Slider Short Desc', 'qcash'),
            'author' => __('Author', 'qcash'),
            'date' => __('Date', 'qcash')
        );
        return $columns;
    }
    public function heroSliderColumns($column, $post_id)
    {
        global $post;

        switch ($column)
        {
            case 'image':
                $img = get_post_meta($post_id, '_thumbnail_id', true );

                if(!empty($img)):
                    echo '<img src="'. wp_get_attachment_image_url($img, 'thumbnail' ).'" width="80" height="auto">';
                endif;
                break;

            case 'slider_desc':
                $thecontent = get_the_content();
                if(!empty($thecontent)):
                    echo substr($thecontent, 0, 70);
                endif;
                break;
        }
    }


    /*
     * custom post type Teams
     */
    public function teamMembersInit()
    {

        register_post_type('team_members', [
            'labels'            => [
                'name'                      => 'Teams Members',
                'singular_name'     => 'Team Member',
                'all_items'             => 'All Team Member',
                'add_new'                   => 'Add New Team Member',
                'add_new_item'      => 'Add New Team Member'
            ],
            'public'            => true,
            'has_archive'   => true,
            'menu_icon'           => 'dashicons-groups',
            'hierarchical'       => false,
            'rewrite'           => [ 'slug' => 'team-members' ],
            'supports'      => [ 'title','editor','thumbnail'],
            'show_ui' => true,
        ]);
    }
    public function qcashEditTeamMembersColumns( $columns )
    {
        $columns = array(
            'cb' => '<input type="checkbox" />',
            'title' => __('Team Member Name', 'qcash'),
            'image' => __('Team Member Images', 'qcash'),
            'testimonials_desc' => __('Team Member Short Desc', 'qcash'),
            'author' => __('Author', 'qcash'),
            'date' => __('Date', 'qcash')
        );
        return $columns;
    }
    public function teamMembersColumns($column, $post_id)
    {
        global $post;

        switch ($column)
        {
            case 'image':
                $img = get_post_meta($post_id, '_thumbnail_id', true );

                if(!empty($img)):
                    echo '<img src="'. wp_get_attachment_image_url($img, 'thumbnail' ).'" width="80" height="auto">';
                endif;
                break;

            case 'testimonials_desc':
                $thecontent = get_the_content();
                if(!empty($thecontent)):
                    echo substr($thecontent, 0, 70);
                endif;
                break;
        }
    }

    /** price package */
    public function packageListInit(){

        register_post_type('packages', [
            'labels'            => [
                'name'                      => 'Package Lists',
                'singular_name'     => 'Package List',
                'all_items'             => 'All Package Lists',
                'add_new'                   => 'Add New Package',
                'add_new_item'      => 'Add New Package'
            ],
            'public'            => true,
            'has_archive'   => true,
            'menu_icon'           => 'dashicons-cart',
            'hierarchical'       => false,
            'rewrite'           => [ 'slug' => 'package-lists' ],
            'supports'      => [ 'title','editor'],
            'show_ui' => true,
        ]);
    }

    /** Services list */
    public function servicesListInit(){

        register_post_type('services', [
            'labels'            => [
                'name'                      => 'Service Items',
                'singular_name'     => 'Service Item',
                'all_items'             => 'All Services',
                'add_new'                   => 'Add New Service',
                'add_new_item'      => 'Add New Service'
            ],
            'public'            => true,
            'has_archive'   => true,
            'menu_icon'           => 'dashicons-admin-page',
            'hierarchical'       => false,
            'rewrite'           => [ 'slug' => 'package-lists' ],
            'supports'      => [ 'title','editor'],
            'show_ui' => true,
        ]);
    }

    /** testimonial list */
    public function testimonialsInit(){

        register_post_type('testimonials', [
            'labels'            => [
                'name'                      => 'Testimonial Items',
                'singular_name'     => 'Testimonial Item',
                'all_items'             => 'All Testimonials',
                'add_new'                   => 'Add New Testimonial',
                'add_new_item'      => 'Add New Testimonial'
            ],
            'public'            => true,
            'has_archive'   => true,
            'menu_icon'           => 'dashicons-buddicons-buddypress-logo',
            'hierarchical'       => false,
            'rewrite'           => [ 'slug' => 'testimonials' ],
            'supports'      => [ 'title','editor'],
            'show_ui' => true,
        ]);
    }

    /** client logo */
    public function clientLogoInit(){

        register_post_type('client_logo', [
            'labels'            => [
                'name'                      => 'Client Logos',
                'singular_name'     => 'Client Logo',
                'all_items'             => 'All Client Logos',
                'add_new'                   => 'Add New Client Logo',
                'add_new_item'      => 'Add New Client Logo'
            ],
            'public'            => true,
            'has_archive'   => true,
            'menu_icon'           => 'dashicons-images-alt',
            'hierarchical'       => false,
            'rewrite'           => [ 'slug' => 'testimonials' ],
            'supports'      => [ 'title','thumbnail'],
            'show_ui' => true,
        ]);
    }

    public function clientLogoColumns( $columns )
    {
        $columns = array(
            'cb' => '<input type="checkbox" />',
            'title' => __('Team Member Name', 'qcash'),
            'image' => __('Team Member Images', 'qcash'),
            'author' => __('Author', 'qcash'),
            'date' => __('Date', 'qcash')
        );
        return $columns;
    }
    public function qcashEditClientLogoColumns($column, $post_id)
    {
        global $post;

        switch ($column)
        {
            case 'image':
                $img = get_post_meta($post_id, '_thumbnail_id', true );

                if(!empty($img)):
                    echo '<img src="'. wp_get_attachment_image_url($img, 'thumbnail' ).'" width="80" height="auto">';
                endif;
                break;
        }
    }

}

new CustomPostType;