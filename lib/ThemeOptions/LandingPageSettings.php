<?php
namespace Qcash\ThemeOptions;
use \Carbon_Fields\Field;

class LandingPageSettings{
	public $settingsFields;
	public $pageAll;

	public function __construct()
	{
		$this->settingsFields = $this->settingsFields();
	}

	public function getAllPages(){
        $allPages = get_pages(array('meta_key' => '_wp_page_template'));
        $page_titles = array();
        foreach ( $allPages as $all_page ) {
            $page_titles["$all_page->post_name"] = $all_page->post_title;
        }
        return $page_titles;
    }

	public function settingsFields()
	{
		return array(
			Field::make( 'separator', 'afbucket_landing_page_settings_section', __( 'Landing Page Settings', 'insurewithgn' )),

            Field::make('select', 'afbucket_landing_page_template_select', __('Select Template For Landing Page'))
                ->set_options(
                    $this->pageAll = $this->getAllPages()
                ),

            Field::make( 'radio', 'afbucket_landing_page_bg_settings', __( 'Landing Page Body Background Setting' ) )
                ->set_options( array(
                    'landing_body_bg_none' => 'None',
                    'landing_body_bg_image' => 'Background Image',
                    'landing_body_bg_color' => 'Background Color'
                ))->set_width( 50 ),
            Field::make( 'image', 'afbucket_landing_page_body_bg_image', 'Landing Page Body Background Upload Image' )
                ->set_conditional_logic( array(
                    'relation' => 'AND',
                    array(
                        'field' => 'afbucket_landing_page_bg_settings',
                        'value' => 'landing_body_bg_image',
                        'compare' => '=',
                    )
                ))->set_width( 50 ),
            Field::make( 'color', 'afbucket_landing_page_body_bg_color', 'Landing Page Body Background Color' )
                ->set_conditional_logic( array(
                    'relation' => 'AND',
                    array(
                        'field' => 'afbucket_landing_page_bg_settings',
                        'value' => 'landing_body_bg_color',
                        'compare' => '=',
                    )
                ))->set_width( 50 ),


            Field::make( 'text', 'afbucket_landing_content_width', __( 'Landing Content Width', 'insurewithgn')),
            Field::make( 'radio', 'afbucket_landing_content_bg_settings', __( 'Landing Content Background Setting' ) )
                ->set_options( array(
                    'landing_content_bg_none' => 'None',
                    'landing_content_bg_image' => 'Background Image',
                    'landing_content_bg_color' => 'Background Color'
                ))->set_width( 50 ),
            Field::make( 'image', 'afbucket_landing_content_bg_image', 'Landing Content Background Upload Image' )
                ->set_conditional_logic( array(
                    'relation' => 'AND',
                    array(
                        'field' => 'afbucket_landing_content_bg_settings',
                        'value' => 'landing_content_bg_image',
                        'compare' => '=',
                    )
                ))->set_width( 50 ),
            Field::make( 'color', 'afbucket_landing_content_bg_color', 'Landing Content Background Color' )
                ->set_conditional_logic( array(
                    'relation' => 'AND',
                    array(
                        'field' => 'afbucket_landing_content_bg_settings',
                        'value' => 'landing_content_bg_color',
                        'compare' => '=',
                    )
                ))->set_width( 50 ),


            Field::make( 'color', 'afbucket_landing_page_top_border_color', __( 'Landing Page Top border Color', 'insurewithgn')),

            Field::make( 'text', 'afbucket_landing_page_top_border_width', __( 'Landing Page Top border Width', 'insurewithgn'))->set_width( 50 ),
            Field::make( 'text', 'afbucket_landing_page_image_border_width', __( 'Landing Page Images border Width', 'insurewithgn'))->set_width( 50 ),
            Field::make( 'radio', 'afbucket_landing_ribon_bg_settings', __( 'Landing Ribon Background Setting' ) )
                ->set_options( array(
                    'landing_ribon_none' => 'None',
                    'landing_ribon_bg_image' => 'Background Image',
                    'landing_ribon_bg_color' => 'Background Color'
                ))->set_width( 50 ),
            Field::make( 'image', 'afbucket_landing_ribon_bg_image', 'Landing Ribon Background Upload Image' )
                ->set_conditional_logic( array(
                    'relation' => 'AND',
                    array(
                        'field' => 'afbucket_landing_ribon_bg_settings',
                        'value' => 'landing_ribon_bg_image',
                        'compare' => '=',
                    )
                ))->set_width( 50 ),
            Field::make( 'color', 'afbucket_landing_ribon_bg_color', 'Landing Ribon Background Color' )
                ->set_conditional_logic( array(
                    'relation' => 'AND',
                    array(
                        'field' => 'afbucket_landing_ribon_bg_settings',
                        'value' => 'landing_ribon_bg_color',
                        'compare' => '=',
                    )
                ))->set_width( 50 ),


            Field::make( 'radio', 'afbucket_landing_overlay_settings', __( 'Landing Page Body Overlay Setting' ) )
                ->set_options( array(
                    'landing_overlay_none' => 'None',
                    'landing_overlay_setting' => 'Landing Overlay Setting',
                )),

            Field::make( 'color', 'afbucket_landing_overlay_color', 'Landing Overlay Color' )
                ->set_conditional_logic( array(
                    'relation' => 'AND',
                    array(
                        'field' => 'afbucket_landing_overlay_settings',
                        'value' => 'landing_overlay_setting',
                        'compare' => '=',
                    )
                ))->set_width( 50 ),
            Field::make( 'text', 'afbucket_landing_overlay_opacity', 'Landing Overlay Opacity' )
                ->set_conditional_logic( array(
                    'relation' => 'AND',
                    array(
                        'field' => 'afbucket_landing_overlay_settings',
                        'value' => 'landing_overlay_setting',
                        'compare' => '=',
                    )
                ))->set_width( 50 ),
            Field::make( 'color', 'afbucket_landing_image_border_color', __( 'Landing Image Border Color', 'insurewithgn'))->set_width( 50 ),
            Field::make( 'color', 'afbucket_landing_ribon_text_color', __( 'Landing Ribon Text Color', 'insurewithgn'))->set_width( 50 ),
            Field::make( 'color', 'afbucket_landing_text_color', __( 'Landing Text Color', 'insurewithgn'))->set_width( 50 ),
            Field::make( 'color', 'afbucket_landing_link_color', __( 'Landing Link Color', 'insurewithgn'))->set_width( 50 ),
		);
	}
}