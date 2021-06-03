<?php global $product; ?>
<li>
    <div class="product-item">
        <div class="product-thumb">
            <a href="<?php the_permalink(); ?>">
                <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'archive_product_thumb')[0]; ?>
                <?php if(!empty($image_url)): ?>
                <img src="<?php echo $image_url; ?>" class="img-fluid" alt="qcash-product">
                <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/watch.jpg" class="img-fluid" alt= "">
                <?php endif; ?>
            </a>
        </div>
        <div class="product-content">
            <h4><a href="<?php the_permalink(); ?>"><?php echo $product->get_name(); ?></a></h4>
            <div class="price-content d-flex justify-content-between">
                <div class="show-price">
                    <?php echo get_woocommerce_currency_symbol(); ?>
                    <?php echo  $product->sale_price; ?>
                    <span class="discount-price  text-truncate ml-1">
                        <?php echo get_woocommerce_currency_symbol(); ?>
                        <?php echo $product->regular_price; ?>
                    </span>
                </div>
                <?php if(!empty($product->sale_price)): ?>
                <div class="price-discount">
                    <?php $discountValue = $product->regular_price - $product->sale_price; ?>
                    <?php echo $resultOfPercentageValue = ($discountValue * $product->regular_price) / 100; ?>% off
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</li>

