<?php
namespace Qcash\ThemeOptions;
use Carbon_Fields\Field;

class BusinessSettings
{
	public $settingsFields;

	public function __construct()
	{
		$this->settingsFields = $this->renderSettingsFields();
		add_shortcode('affiliate-bucket-business-address',[$this,'renderAddress']);
		add_shortcode('affiliate-bucket-business-phone-number',[$this,'renderPhoneNumber']);
		add_shortcode('insurewithgn-business-phone-number-link',[$this,'renderPhoneNumberLink']);
		add_shortcode('affiliate-bucket-business-social-links',[$this,'renderSocialMediaLinks']);
	}
	public function renderSettingsFields()
	{
		return array_merge($this->businessInfoSettings(), $this->socialMediaSettings(), $this->socialMediaStyleSettings());
	}
	public function businessInfoSettings()
	{
		return array(
			Field::make( 'separator', 'insurewithgn_business_section', __( 'Business Info' )),
			Field::make( 'text', 'insurewithgn_business_phone_number', __( 'Phone Number' ))->set_width( 50 ),
			Field::make( 'textarea', 'insurewithgn_business_address', __( 'Business Info Address' ))->set_width( 50 )
		);
	}
	public function socialMediaSettings()
	{
		return array(
			Field::make( 'separator', 'insurewithgn_social_media_section', __( 'Business Info Social Media' )),
			Field::make( 'complex', 'insurewithgn_social_meida', 'Add Social Media Icon and Link' )
				->add_fields( array(
					Field::make( 'text', 'icon', 'Icon Class' ),
					Field::make( 'text', 'link', 'Social Link' ),
				) ),

		);
	}
	public function socialMediaStyleSettings()
	{
		return array(
			Field::make( 'separator', 'insurewithgn_social_media_styles_section', __( 'Business Info Social Media Styles' )),
			Field::make( 'text', 'insurewithgn_social_icon_height', __( 'Height' ))
				->set_help_text( 'Please enter value with unit. e.g. 20px or 1rem')
				->set_width( 33 ),
			Field::make( 'text', 'insurewithgn_social_icon_width', __( 'Width' ))
				->set_help_text( 'Please enter value with unit. e.g. 20px or 1rem')
				->set_width( 33 ),
			Field::make( 'text', 'insurewithgn_social_icon_font_size', __( 'Icon Font Size' ))
				->set_help_text( 'Please enter value with unit. e.g. 16px or 1rem')
				->set_width( 33 ),
			Field::make( 'color', 'insurewithgn_social_icon_color', __( 'Icon Color' ))->set_width( 50 ),
			Field::make( 'color', 'insurewithgn_social_icon_hover_color', __( 'Icon Hover Color' ))->set_width( 50 ),
			Field::make( 'color', 'insurewithgn_social_icon_bg_color', __( 'Icon Background Color' ))->set_width( 50 ),
			Field::make( 'color', 'insurewithgn_social_icon_bg_hover_color', __( 'Icon Background Hover Color' ))->set_width( 50 ),
		);
	}
	public function renderAddress()
	{
		ob_start();
		$address = carbon_get_theme_option('insurewithgn_business_address');
		?>
		<div class="insurewithgn-business-address">
			<?php if(!empty($address)): ?>
				<p><?php echo nl2br($address);?></p>
			<?php else: ?>
				<p>Your address</p>
			<?php endif;?>
		</div>
		<?php
		return ob_get_clean();
	}
	public function renderPhoneNumber()
	{
		$phoneNumber = carbon_get_theme_option('insurewithgn_business_phone_number');
		if(!empty($phoneNumber))
			return $phoneNumber;
		return 'Your phone number';
	}
	public function renderPhoneNumberLink()
	{
		ob_start();
		$phoneNumber = $this->renderPhoneNumber();
		?>
		<a href="tel:<?php echo $phoneNumber; ?>">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone-icon.png" alt="phone-icon" class="img-fluid">
			<?php _e('Call Us:', 'insurewithgn'); ?> <?php echo $phoneNumber; ?>
		</a>
		<?php
		return ob_get_clean();
	}
	public function renderSocialMediaLinks()
	{
		ob_start();
		$socialMediaLinks = carbon_get_theme_option('insurewithgn_social_meida');
		if(!empty($socialMediaLinks)):
			?>
			<ul class="insurewithgn-social-links social-links">
				<?php foreach ($socialMediaLinks as $socialLink): ?>
					<li>
						<a href="<?php echo $socialLink['link'];?>" target="_blank"><i class="<?php echo $socialLink['icon']; ?>"></i></a>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php else: ?>
			<p>Your social links</p>
			<?php
		endif;
		return ob_get_clean();
	}

}