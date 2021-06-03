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
        <div class="product-content text-center">
            <h4><a href="<?php the_permalink(); ?>"><?php echo $product->get_name(); ?></a></h4>
            <p class="mb-0">per kg (final cost based on weight)</p>
            <div class="price-content">
                <div class="show-price">
                    <?php
                    if ($product->is_type( 'simple' )) {
                        if(!empty($product->sale_price)){
                            echo get_woocommerce_currency_symbol();
                            echo  $product->sale_price;
                            echo '<span class="discount-price text-truncate ml-1">';
                            echo get_woocommerce_currency_symbol();
                            echo $product->regular_price;
                            echo '</span>';
                        }else{
                            echo get_woocommerce_currency_symbol();
                            echo  $product->regular_price;
                        }
                    }
                    elseif($product->is_type('variable')){
                        $sale_min_price     =  $product->get_variation_sale_price( 'min', true );
                        $sale_max_price     =  $product->get_variation_sale_price( 'max', true );
                        $regular_min_price  =  $product->get_variation_regular_price( 'min', true );
                        $regular_max_price  =  $product->get_variation_regular_price( 'max', true );
                        echo get_woocommerce_currency_symbol().$sale_min_price."-".get_woocommerce_currency_symbol().$sale_max_price;
                        echo '<span class="discount-price text-truncate ml-2">';
                        echo get_woocommerce_currency_symbol().$regular_min_price."-".get_woocommerce_currency_symbol().$regular_max_price;
                        echo '</span>';
                    }
                    ?>
                </div>
            </div>
            <div class="product-actions">
                <div class="product-qty">
                    <?php if($product->is_type('variable')): ?>

                    <label for="select-per-kg"></label>
                    <select name="select-per-kg" id="select-per-kg" class="select-per-kg">
                        <option value="1-kg">1 kg</option>
                        <option value="1-kg">2 kg</option>
                        <option value="1-kg">500 g</option>
                    </select>
                    <?php endif; ?>
                </div>
            </div>
            <div class="product-add-to-cart my-2">
                <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
            </div>
        </div>
    </div>
</li>

