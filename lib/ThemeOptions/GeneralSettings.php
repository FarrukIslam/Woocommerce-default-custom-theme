<?php
namespace Qcash\ThemeOptions;
use \Carbon_Fields\Field;

class GeneralSettings
{
	/**
	 * all general settings fields
	 * @var array
	 */
	public $settingsFields;
	/**
	 * method __construct()
	 */
	public function __construct()
	{
		$this->settingsFields = $this->renderSettingsFields();
		add_shortcode('qcash-logo',[$this,'renderLogo']);
		add_shortcode('qcash-alt-logo',[$this,'renderAltLogo']);
	}
	/**
	 * combine settings field to a array
	 * @return array
	 */
	public function renderSettingsFields()
	{
		return array_merge($this->logoSettings(),$this->productLayout(), $this->productDetailsPage(), $this->productPageContent(),  $this->footerWidgetContent(), $this->footerSettings(), $this->footerSettingsWhyChooseUs());
	}
	/**
	 * logo settings fields
	 * @return array
	 */
	public function logoSettings()
	{
		return array(
			Field::make( 'separator', 'insurewithgn_logo_section', __( 'Logos', 'insurewithgn') ),
			Field::make( 'image', 'insurewithgn_img_logo', __( 'Main Logo', 'insurewithgn'))
				->set_width( 50 ),
			Field::make( 'image', 'insurewithgn_alt_img_logo', __( 'Alternative Logo', 'insurewithgn'))
				->set_width( 50 )
		);
	}


	/**
	 * product layout settings fields
	 * @return array
	 */
	public function productLayout(){
		return array(
			Field::make( 'separator', 'afbucket_product_layout', __( 'Select Product Layout', 'Select Product Layout')),
            Field::make( 'radio', 'afbucket_product_layout_select', 'Select Product Page Layout' )
                ->add_options( array(
                    'detail_layout' => 'Detail Layout Product',
                    'grid_layout' => 'Grid Layout Product',
                    'list_layout' => 'List Layout Product',
                ) )->set_width( 50 ),
		);
	}

	/**
	 * product detail settings fields
	 * @return array
	 */
	public function productDetailsPage(){
		return array(
            Field::make( 'separator', 'afbucket_product_detail_page_setting', __( 'Product Detail Page Setting', 'affiliate')),
            Field::make( 'text', 'afbucket_product_detail_page_redirect_timeout', __( 'Product Detail page Redirect Timeout', 'affiliate'))->set_width( 50 ),
		);
	}

	/**
	 * product page content settings fields
	 * @return array
	 */
	public function productPageContent(){
		return array(
			Field::make( 'separator', 'afbucket_product_page_content', __( 'Product Page Content', 'affiliate')),
            Field::make( 'text', 'afbucket_product_page_content_heading', __( 'Heading Content', 'affiliate'))->set_width( 50 ),
            Field::make( 'textarea', 'afbucket_product_page_content_text', __( 'Content', 'affiliate'))->set_width( 50 ),
            Field::make( 'text', 'afbucket_product_page_content_popup_link', __( 'Popup Link', 'affiliate'))->set_width( 50 ),
            Field::make( 'textarea', 'afbucket_product_page_content_popup_content', __( 'Popup Content', 'affiliate'))->set_width( 50 ),
            Field::make( 'text', 'afbucket_popup_shorcode', __( 'Check Submit Popup Shortcode', 'affiliate')),
		);
	}



	/**
	 * Footer Why choose us settings fields
	 * @return array
	 */
	public function footerSettingsWhyChooseUs(){
		return array(
            Field::make( 'separator', 'why_choose_us', __( 'Why Choose us', 'qcash')),
            Field::make( 'complex', 'why_choose_us_items', 'Why Choose us Items' )
                ->add_fields( array(
                    Field::make( 'image', 'why_choose_us_img', __( 'Why Choose us Image', 'qcash'))
                        ->set_width( 50 ),
                    Field::make( 'text', 'why_choose_us_label', __( 'Why Choose us Image', 'qcash'))
                        ->set_width( 50 ),
                    Field::make( 'text', 'why_choose_us_link', __( 'Why Choose us Link', 'qcash')),
                ) ),
		);
	}


	/**
	 * Footer settings fields
	 * @return array
	 */
	public function footerSettings(){
		return array(
			Field::make( 'textarea', 'footer_content', __( 'Footer Content', 'qcash')),
			Field::make( 'text', 'footer_copy_right_text', __( 'Copy right Content', 'qcash')),
		);
	}

    /**
     * Footer settings fields
     * @return array
     */
    public function footerWidgetContent(){
        return array(
            Field::make( 'separator', 'afbucket_footer_widget_content', __( 'Footer Widget Content About', 'affiliate')),
            Field::make( 'image', 'afbucket_footer_about_img_logo', __( 'Footer Alternative Logo', 'insurewithgn'))
                ->set_width( 50 ),
            Field::make( 'textarea', 'afbucket_footer_widget_about_content', __( 'About Content', 'AffiliateBucket')),
        );
    }


	/**
	 * callback for 'insurewithgn-logo' shortcode
	 *  @uses _getLogo() method
	 * @return mixed
	 */
	public function renderLogo()
	{
		ob_start();
		?>
		<div class="logo-wrap">
			<a href="<?php echo get_bloginfo('url'); ?>">
				<?php echo $this->_getLogo(); ?>
			</a>
		</div>
		<?php
		return ob_get_clean();
	}
	/**
	 * callback for 'insurewithgn-alt-logo' shortcode
	 * @uses _getLogo() method
	 * @return mixed
	 */

	public function renderAltLogo()
	{
		ob_start();
		?>
			<a href="<?php echo get_bloginfo('url'); ?>">
				<?php echo $this->_getLogo(true); ?>
			</a>
		<?php
		return ob_get_clean();
	}
	/**
	 * get logo from theme options
	 * @param bool
	 * @return mixed
	 */
	private function _getLogo($alt = false)
	{
		if ($alt === false) {
			$imgLogo =  carbon_get_theme_option('insurewithgn_img_logo');
			if(!empty($imgLogo)){
				$image = wp_get_attachment_image_src($imgLogo,'medium');
				return '<img src="' . $image[0] . '" alt="'.get_bloginfo("name").'">';
			}else{
				return '<h3>Your logo</h3>';
			}
		} else {
			$altImgLogo =  carbon_get_theme_option('insurewithgn_alt_img_logo');
			if(!empty($altImgLogo)){
				$image = wp_get_attachment_image_src($altImgLogo,'medium');
				return '<img src="' . $image[0] . '" alt="'.get_bloginfo("name").'">';
			}else{
				return '<h3>Your logo</h3>';
			}
		}
	}
}