<?php
namespace Qcash;

use \Carbon_Fields\Carbon_Fields;
use \Carbon_Fields\Container;
use Qcash\ThemeOptions\GeneralSettings;
use Qcash\ThemeOptions\BusinessSettings;
use Qcash\ThemeOptions\GoogleSettings;
use Qcash\ThemeOptions\widgetSettings;
use Qcash\ThemeOptions\LandingPageSettings;


class ThemeOptions{

	/**
	 * theme options page container instance
	 */
	public $themeOptionsPage;
	/**
	 * method __construct()
	 */
	public function __construct()
	{
		add_action( 'carbon_fields_register_fields', [$this,'registerThemePage']);
		add_action( 'carbon_fields_register_fields', [$this,'initThemeOptionsTabs']);
	//	add_action('after_setup_theme',[$this,'bootCarbonFields']);
	}
	/**
	 * boot carbon fields
	 * @return void
	 */
	public function bootCarbonFields()
	{
		Carbon_Fields::boot();
	}
	/**
	 * register theme options page
	 * set $themeOptionsPage property value
	 * @return void
	 */
	public function registerThemePage()
	{
		$this->themeOptionsPage = Container::make( 'theme_options', 'insurewithgn_theme_options', __( 'Theme Options', 'insurewithgn' ));
	}
	/**
	 * register tabs in theme options page
	 * @return void
	 */
	public function initThemeOptionsTabs()
	{
		/* General settings options */
		$this->themeOptionsPage->add_tab( __( 'General' ), (new GeneralSettings())->settingsFields);
		/* Business settings options */
		$this->themeOptionsPage->add_tab( __( 'Business Info' ), (new BusinessSettings())->settingsFields);

		$this->themeOptionsPage->add_tab( __( 'Google' ), (new GoogleSettings())->settingsFields);
		$this->themeOptionsPage->add_tab( __( 'Widget Settings' ), (new widgetSettings())->settingsFields);
        $this->themeOptionsPage->add_tab( __( 'Landing Page Settings' ), (new LandingPageSettings())->settingsFields);
	}

}