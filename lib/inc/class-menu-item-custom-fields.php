<?php
if ( ! class_exists( 'MenuItemCustomFields' ) ) {
    class MenuItemCustomFields {
        public function __construct()
        {
            add_action('wp_nav_menu_item_custom_fields', array($this, 'QcashMenuCustomFields'), 10,2);
            add_action('wp_update_nav_menu_item', array($this, 'QcashMenuContentUpdate'), 10,2);
            add_filter('nav_menu_item_title', array($this, 'QcashMenuItemObjects'), 10,2);
        }

        /**
         * Add custom fields to menu item
         * @param  int $item_id
         * @params obj $item - the menu item
         * @params array $args
         */
        public function QcashMenuCustomFields($item_id, $item){
            wp_nonce_field( 'custom_menu_meta_nonce', 'qcash_menu_extra_field_meta_nonce' );
            $menu_item_cf = get_post_meta( $item_id, '_qcash_menu_item_cf_meta', true );
            ?>
            <div class="cf_menu_meta description-wide" style="margin: 5px 0;">
                <span class="description"><?php _e( "Add Menu Icon Field", 'qcash' ); ?></span>
                <br />
                <input type="hidden" class="nav-menu-id" value="<?php echo $item_id ;?>" />
                <div class="logged-input-holder">
                    <input type="text" name="cf_menu_meta[<?php echo $item_id ;?>]" id="cf-menu-meta-for-<?php echo $item_id ;?>" value="<?php echo esc_attr( $menu_item_cf ); ?>" class="widefat"/>
                    <label for="cf-menu-meta-for-<?php echo $item_id ;?>">
                        <?php _e( '(Menu Item Extra Text/Icon)', 'qcash'); ?>
                    </label>
                </div>

            </div>
            <?php
        }

        /**
         * Save the menu item meta
         * @param int $menu_id
         * @param int $menu_item_db_id
         */

        public function QcashMenuContentUpdate( $menu_id, $menu_item_db_id ) {

            // Verify this came from our screen and with proper authorization.
            if ( ! isset( $_POST['qcash_menu_extra_field_meta_nonce'] ) || ! wp_verify_nonce( $_POST['qcash_menu_extra_field_meta_nonce'], 'custom_menu_meta_nonce' ) ) {
                return $menu_id;
            }

            if ( isset( $_POST['cf_menu_meta'][$menu_item_db_id]  ) ) {
                $sanitized_data = sanitize_text_field( $_POST['cf_menu_meta'][$menu_item_db_id] );
                update_post_meta( $menu_item_db_id, '_qcash_menu_item_cf_meta', $sanitized_data );
            } else {
                delete_post_meta( $menu_item_db_id, '_qcash_menu_item_cf_meta' );
            }
        }

        public function QcashMenuItemObjects( $title, $item ) {

            if( is_object( $item ) && isset( $item->ID ) ) {
                $menu_item_cf = get_post_meta( $item->ID, '_qcash_menu_item_cf_meta', true );
                if ( ! empty( $menu_item_cf ) ) {
                    $title = ' <i class="'.$menu_item_cf.'"></i>'.$title;
                }
            }
            return $title;

        }


    }
    new MenuItemCustomFields;
}




