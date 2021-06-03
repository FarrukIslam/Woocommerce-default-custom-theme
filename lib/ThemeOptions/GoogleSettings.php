<?php
namespace Qcash\ThemeOptions;
use \Carbon_Fields\Field;

class GoogleSettings{
	public $settingsFields;

	public function __construct()
	{
		$this->settingsFields = $this->settingsFields();
	}

	public function settingsFields()
	{
		return array(
			Field::make( 'separator', 'ot_google_settings_section', __( 'Google Settings' )),
			Field::make( 'text', 'ot_reviews_google_api_key', __( 'Google api key' )),
			Field::make( 'text', 'ot_reviews_business_location_id', __( 'Google place id of you business' ))
			->set_help_text( 'Not sure what it is, <a href="https://developers.google.com/places/place-id" target="_blank">Get a place id</a> and paste it here' ),
		);
	}
}