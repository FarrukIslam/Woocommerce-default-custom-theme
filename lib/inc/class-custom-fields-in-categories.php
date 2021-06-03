<?php
if ( ! class_exists( 'CategoryInCustomFields' ) ) {
    class CategoryInCustomFields {
        public function __construct()
        {
            add_action('product_cat_add_form_fields', array($this, 'qcashTaxonomyAddMetaFields'), 10,2);
            add_action('product_cat_edit_form_fields', array($this, 'qcashTaxonomyEditMetaFields'), 10,2);
            add_action('created_product_cat', array($this, 'qcashTaxonomySaveTaxonomyMeta'), 10,2);
            add_action('edited_product_cat', array($this, 'qcashTaxonomySaveTaxonomyMeta'), 10,2);
        }

        // Add new term page
        public function qcashTaxonomyAddMetaFields( $taxonomy ) { ?>
            <div class="form-field term-group">
            <label for="popular_category">
                <?php _e( 'popular categories', 'qcash' ); ?> <input type="checkbox" id="popular_category" name="popular_category" value="yes" />
            </label>
            </div><?php
        }

        // Edit term page
        public function qcashTaxonomyEditMetaFields( $term, $taxonomy ) {
            $popular_category = get_term_meta( $term->term_id, 'popular_category', true ); ?>

            <tr class="form-field term-group-wrap">
            <th scope="row">
                <label for="popular_category"><?php _e( 'Popular Category', 'qcash' ); ?></label>
            </th>
            <td>
                <input type="checkbox" id="popular_category" name="popular_category" value="yes" <?php echo ( $popular_category ) ? checked( $popular_category, 'yes' ) : ''; ?>/>
            </td>
            </tr><?php
        }

        // Save custom meta
        public function qcashTaxonomySaveTaxonomyMeta( $term_id, $tag_id ) {
            if ( isset( $_POST[ 'popular_category' ] ) ) {
                update_term_meta( $term_id, 'popular_category', 'yes' );
            } else {
                update_term_meta( $term_id, 'popular_category', '' );
            }
        }
    }
    new CategoryInCustomFields;
}











