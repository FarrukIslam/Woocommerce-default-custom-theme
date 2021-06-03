<?php
namespace Qcash\ThemeOptions;
use \Carbon_Fields\Field;

class widgetSettings{
	public $settingsFields;

	public function __construct()
	{
		$this->settingsFields = $this->settingsFields();
	}

	public function settingsFields()
	{
		return array(
			Field::make( 'separator', 'widget_settings_section', __( 'Widget Settings', 'insurewithgn' )),
            Field::make( 'image', 'afbucket_widget_single_img', __( 'Widget Single Image', 'insurewithgn'))
                ->set_width( 50 ),
            Field::make( 'text', 'afbucket_widget_single_img_link', __( 'Widget Single Image Link', 'insurewithgn'))
                ->set_width( 50 ),

            Field::make( 'text', 'afbucket_widget_news_feed', __( 'Widget News Feed Heading', 'insurewithgn')),
            Field::make( 'text', 'afbucket_widget_recent_products', __( 'Widget Recent Product Heading', 'insurewithgn')),
            Field::make( 'text', 'afbucket_widget_featured_products', __( 'Widget Featured Product Heading', 'insurewithgn')),
            Field::make( 'separator', 'widget_settings_about_section', __( 'Widget About', 'insurewithgn' )),
            Field::make( 'image', 'afbucket_widget_about_img', __( 'Widget About Image', 'insurewithgn'))
                ->set_width( 50 ),
            Field::make( 'text', 'afbucket_widget_about_heading', __( 'Widget About Heading', 'insurewithgn')),
            Field::make( 'textarea', 'afbucket_widget_about_content', __( 'Widget About Content', 'insurewithgn')),

            Field::make( 'separator', 'widget_settings_about_section_link', __( 'Widget About With Link', 'insurewithgn' )),
            Field::make( 'text', 'afbucket_widget_about_link', __( 'Widget About Link', 'insurewithgn')),
            Field::make( 'image', 'afbucket_widget_about_img_link', __( 'Widget About Image', 'insurewithgn'))
                ->set_width( 50 ),
            Field::make( 'text', 'afbucket_widget_about_heading_link', __( 'Widget About Heading', 'insurewithgn')),
            Field::make( 'textarea', 'afbucket_widget_about_content_link', __( 'Widget About Content', 'insurewithgn')),

            Field::make( 'separator', 'widget_settings_section_footer', __( 'Widget Footer Settings', 'insurewithgn' )),
            Field::make( 'text', 'afbucket_widget_footer_our_product_heading', __( 'Widget Footer Our Product Heading', 'insurewithgn')),
            Field::make( 'text', 'afbucket_widget_footer_categories_heading', __( 'Widget Footer Categories', 'insurewithgn')),
            Field::make( 'text', 'afbucket_widget_footer_quick_links', __( 'Widget Footer Quick Link', 'insurewithgn')),

		);
	}
}