<?php get_header(); ?>
<main>
    <div class="banner mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 d-none d-md-block">
                    <div class="categories-wrapper pb-5">
                        <div class="category-heading">
                            <i></i>
                            <span>Categories</span>
                        </div>
                        <ul class="categories-items list-unstyled">
                            <li><a href="#">Women's Fashion</a></li>
                            <li><a href="#">Men's Fashion</a></li>
                            <li><a href="#">Phones & Telecommunications</a></li>
                            <li><a href="#">Consumer Electronics</a></li>
                            <li><a href="#">Jewelry & Watches</a></li>
                            <li><a href="#">Bags & Shoes</a></li>
                            <li><a href="#">Lifting Tools & Accessories</a></li>
                            <li><a href="#">Tool Organizers</a></li>
                            <li><a href="#">Toys , Kids & Babies</a></li>
                            <li><a href="#">Outdoor Fun & Sports</a></li>
                            <li><a href="#">Beauty, Health & Hair</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-9 d-flex">
                    <div class="banner-content">
                        <div class="featured-deals d-none d-md-block">
                            <ul class="list-unstyled d-flex">
                                <li><a href="#">All Shops </a></li>
                                <li><a href="#">Flash Deals </a></li>
                                <li><a href="#">Gift Card </a></li>
                                <li><a href="#">Campaigns </a></li>
                            </ul>
                        </div>
                        <div class="banner-carusel-wrapper d-block d-sm-flex">
                            <div class="banner-carusel  mt-md-5 mt-2 mb-3 border bg-light mr-3">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="img-fluid d-block w-100" src="<?php echo get_template_directory_uri(); ?>/static/dist/img/1.png" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid  d-block w-100" src="<?php echo get_template_directory_uri(); ?>/static/dist/img/2.png" alt="Second slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="banner-sidebar-collections mt-2 mt-md-5 mb-3">
                                <h4 class="text-center">Daily Deals</h4>
                                <ul class="list-unstyled">
                                    <li class="d-flex">
                                        <div class="item-content w-75">
                                            <h5>Fresh Procedure Items</h5>
                                            <div class="view-more">
                                                <a href="#">Shop Now</a>
                                            </div>
                                        </div>
                                        <div class="item-banner w-25">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/fresh.png" alt="">
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="item-content w-75">
                                            <h5>Baby Care Personal items</h5>
                                            <div class="view-more">
                                                <a href="#">Shop Now</a>
                                            </div>
                                        </div>
                                        <div class="item-banner w-25">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/baby.png" alt="">
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="item-content w-75">
                                            <h5>Personal care All Items</h5>
                                            <div class="view-more">
                                                <a href="#">Shop Now</a>
                                            </div>
                                        </div>
                                        <div class="item-banner w-25">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/personal-care.png" alt="">
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <ul class="featured-collection-wrapper d-block d-sm-flex">
                            <li class="featured-collection d-block d-md-flex align-items-center">
                                <div class="collection-img pr-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/cameras.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="collection-content text-center text-md-left">
                                    <h4>Catch Big <span>Deals</span> on the Cameras</h4>
                                    <a href="#">Shop Now <i class="fa fa-angle-right"></i></a>
                                </div>
                            </li>
                            <li class="featured-collection d-block d-md-flex  align-items-center">
                                <div class="collection-img pr-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/MobileDevicesv2-2.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="collection-content text-center text-md-left">
                                    <h4>Shop the  <span>Hottest</span> Products</h4>
                                    <a href="#">Shop Now <i class="fa fa-angle-right"></i></a>
                                </div>
                            </li>
                            <li class="featured-collection d-block d-md-flex  align-items-center">
                                <div class="collection-img pr-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/360-camers.png" class="img-fluid" alt="">
                                </div>
                                <div class="collection-content text-center text-md-left">
                                    <h4>Catch Big <span>Deals</span> Head Phone</h4>
                                    <a href="#">Shop Now <i class="fa fa-angle-right"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="daily-needs flash-sale">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="flash-sale-wrapper mb-5">
                        <div class="deal-heading d-flex justify-content-between align-items-center">
                            <h2>Daily Needs</h2>
                            <div class="view-all">
                                <a href="#">View More</a>
                            </div>
                        </div>

                        <ul class="flash-sale-items daily-need-items d-block d-md-flex list-unstyled my-4">
                            <li>
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/glossary/1.png" class="img-fluid" alt= "">
                                        </a>
                                    </div>
                                    <div class="product-content text-center">
                                        <h4><a href="#">Misti Khumra</a></h4>
                                        <p class="mb-0">per kg (final cost based on weight)</p>
                                        <div class="price-content">
                                            <div class="show-price">
                                                $30
                                                <span class="discount-price  text-truncate ml-1">$35</span>
                                            </div>
                                        </div>
                                        <div class="product-actions">
                                            <div class="product-qty">
                                                <label for="select-per-kg"></label>
                                                <select name="select-per-kg" id="select-per-kg" class="select-per-kg">
                                                    <option value="1-kg">1 kg</option>
                                                    <option value="1-kg">2 kg</option>
                                                    <option value="1-kg">500 g</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="product-add-to-cart my-2">
                                            <a href="#" class="btn">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/glossary/2.png" class="img-fluid" alt= "">
                                        </a>
                                    </div>
                                    <div class="product-content text-center">
                                        <h4><a href="#">Lemon Long (Lomba Lebu)</a></h4>
                                        <p class="mb-0">per Pics</p>
                                        <div class="price-content">
                                            <div class="show-price">
                                                $1
                                                <span class="discount-price  text-truncate ml-1">$2</span>
                                            </div>
                                        </div>
                                        <div class="product-actions">
                                        </div>
                                        <div class="product-add-to-cart my-2">
                                            <a href="#" class="btn">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/glossary/8.png" class="img-fluid" alt= "">
                                        </a>
                                    </div>
                                    <div class="product-content text-center">
                                        <h4><a href="#">Fresh Soyabean Oil 5Ltr</a></h4>
                                        <p class="mb-0">5Ltr</p>
                                        <div class="price-content">
                                            <div class="show-price">
                                                $500
                                            </div>
                                        </div>
                                        <div class="product-actions">
                                            <div class="product-qty">
                                                <label for="select-per-kg"></label>
                                                <select name="select-per-kg" id="select-per-kg" class="select-per-kg">
                                                    <option value="1-kg">1 kg</option>
                                                    <option value="1-kg">2 kg</option>
                                                    <option value="1-kg">500 g</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="product-add-to-cart my-2">
                                            <a href="#" class="btn">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/glossary/7.png" class="img-fluid" alt= "">
                                        </a>
                                    </div>
                                    <div class="product-content text-center">
                                        <h4><a href="#">Beef Premium</a></h4>
                                        <p class="mb-0">per kg (final cost based on weight)</p>
                                        <div class="price-content">
                                            <div class="show-price">
                                                $300
                                                <span class="discount-price  text-truncate ml-1">$350</span>
                                            </div>
                                        </div>
                                        <div class="product-actions">
                                            <div class="product-qty">
                                                <label for="select-per-kg"></label>
                                                <select name="select-per-kg" id="select-per-kg" class="select-per-kg">
                                                    <option value="1-kg">1 kg</option>
                                                    <option value="1-kg">2 kg</option>
                                                    <option value="1-kg">500 g</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="product-add-to-cart my-2">
                                            <a href="#" class="btn">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/glossary/6.png" class="img-fluid" alt= "">
                                        </a>
                                    </div>
                                    <div class="product-content text-center">
                                        <h4><a href="#">Nido FortiGrow FCMP</a></h4>
                                        <p class="mb-0"> 2.5 Kg Tin</p>
                                        <div class="price-content">
                                            <div class="show-price">
                                                $30
                                                <span class="discount-price  text-truncate ml-1">$35</span>
                                            </div>
                                        </div>
                                        <div class="product-actions"></div>
                                        <div class="product-add-to-cart my-2">
                                            <a href="#" class="btn">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="round-shape-list">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="categories-products bg-white rounded mb-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-style-2nd mt-3 mb-4">
                                    <ul class="d-flex list-unstyled align-items-center">
                                        <li><a href="#">Explore popular categories</a></li>
                                        <li><a href="#" class="see-all">See All</a> <i class="fa fa-arrow-right ml-2"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <ul class="round-shape-list-items list-unstyled d-block d-lg-flex mb-5">
                                    <li class="text-center">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/categories/apple.png" class="img-fluid rounded-circle" alt="">
                                            <h4>Apple</h4>
                                        </a>
                                    </li>
                                    <li class="text-center">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/categories/samsung.png" class="img-fluid rounded-circle" alt="">
                                            <h4>Samsung</h4>
                                        </a>
                                    </li>
                                    <li class="text-center">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/categories/sony.png" class="img-fluid rounded-circle" alt="">
                                            <h4>Sony</h4>
                                        </a>
                                    </li>
                                    <li class="text-center">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/categories/ugreen.png" class="img-fluid rounded-circle" alt="">
                                            <h4>Ugreen</h4>
                                        </a>
                                    </li>
                                    <li class="text-center">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/categories/xiaomi.png" class="img-fluid rounded-circle" alt="">
                                            <h4>Xiaomi</h4>
                                        </a>
                                    </li>
                                    <li class="text-center">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/categories/nike.png" class="img-fluid rounded-circle" alt="">
                                            <h4>Nike</h4>
                                        </a>
                                    </li>
                                    <li class="text-center">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/categories/born-pretty.png" class="img-fluid rounded-circle" alt="">
                                            <h4>Born Pretty</h4>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="flash-sale">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="flash-sale-wrapper mb-5">
                        <div class="deal-heading d-flex justify-content-between align-items-center">
                            <h2>Flash Deals</h2>
                            <div class="view-all">
                                <a href="#">View More</a>
                            </div>
                        </div>

                        <ul class="flash-sale-items d-block d-md-flex list-unstyled my-4">
                            <li>
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/watch.jpg" class="img-fluid" alt= "">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="#">Baby Powder</a></h4>
                                        <div class="price-content d-flex justify-content-between">
                                            <div class="show-price">
                                                $500
                                                <span class="discount-price  text-truncate ml-1">$600</span>
                                            </div>
                                            <div class="price-discount">
                                                20% off
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/headphone.jpg" class="img-fluid" alt= "">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="#">Baby Powder</a></h4>
                                        <div class="price-content d-flex justify-content-between">
                                            <div class="show-price">
                                                $500
                                                <span class="discount-price  text-truncate ml-1">$600</span>
                                            </div>
                                            <div class="price-discount">
                                                20% off
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/watch-2.jpg" class="img-fluid" alt= "">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="#">Baby Powder</a></h4>
                                        <div class="price-content d-flex justify-content-between">
                                            <div class="show-price">
                                                $500
                                                <span class="discount-price  text-truncate ml-1">$600</span>
                                            </div>
                                            <div class="price-discount">
                                                20% off
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/balt.jpg" class="img-fluid" alt= "">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="#">Baby Powder</a></h4>
                                        <div class="price-content d-flex justify-content-between">
                                            <div class="show-price">
                                                $500
                                                <span class="discount-price  text-truncate ml-1">$600</span>
                                            </div>
                                            <div class="price-discount">
                                                20% off
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/cable.jpg" class="img-fluid" alt= "">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="#">Baby Powder</a></h4>
                                        <div class="price-content d-flex justify-content-between">
                                            <div class="show-price">
                                                $500
                                                <span class="discount-price  text-truncate ml-1">$600</span>
                                            </div>
                                            <div class="price-discount">
                                                20% off
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="new-arrival-products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="new-arrival-products-wrapper mb-5">
                        <div class="deal-heading d-flex justify-content-between align-items-center">
                            <h2>New Arrival Dress</h2>
                            <div class="view-all">
                                <a href="#">View More</a>
                            </div>
                        </div>

                        <ul class="new-arrival-product-items d-block d-md-flex list-unstyled my-4">
                            <li>
                                <div class="product-item-fusion">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/dress-1.jpg" class="img-fluid" alt= "">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="#">Baby Powder</a></h4>
                                        <div class="price-content d-flex justify-content-between">
                                            <div class="show-price">
                                                $500
                                                <span class="discount-price  text-truncate ml-1">$600</span>
                                            </div>
                                            <div class="price-discount">
                                                20% off
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-quick-view">
                                        <div class="quick-view-content position-relative">
                                            <h5 class="mb-0">Buy The Product</h5>
                                            <div class="quick-content">
                                                <div class="select-size py-2 px-2">
                                                    <label for="select-size">Select a Size:</label>
                                                    <ul id="select-size" class="d-inline-block list-unstyled">
                                                        <li><a href="#">S</a></li>
                                                        <li><a href="#">M</a></li>
                                                        <li><a href="#">L</a></li>
                                                        <li><a href="#">XL</a></li>
                                                        <li><a href="#">XXL</a></li>
                                                    </ul>
                                                </div>
                                                <div class="select-color py-2 px-2">
                                                    <label for="select-color">Select a Color:</label>
                                                    <ul id="select-color" class="d-flex list-unstyled">
                                                        <li><a href="#" class="bg-white">White</a></li>
                                                        <li><a href="#" class="bg-success">Green</a></li>
                                                        <li><a href="#" class="bg-dark">BLACK</a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-quantity py-2 px-2">
                                                    <label for="input-number">Quantity:</label>
                                                    <input type="number" class="qty-input w-25" value="0" id="input-number"/>
                                                </div>
                                            </div>



                                            <a href="#" class="d-block btn-quick-action">Add to Cart</a>
                                        </div>

                                    </div>
                                </div>

                            </li>
                            <li>
                                <div class="product-item-fusion">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/dress-2.jpg" class="img-fluid" alt= "">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="#">Baby Powder</a></h4>
                                        <div class="price-content d-flex justify-content-between">
                                            <div class="show-price">
                                                $500
                                                <span class="discount-price  text-truncate ml-1">$600</span>
                                            </div>
                                            <div class="price-discount">
                                                20% off
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-quick-view">
                                        <div class="quick-view-content position-relative">
                                            <h5 class="mb-0">Buy The Product</h5>
                                            <div class="quick-content">
                                                <div class="select-size py-2 px-2">
                                                    <label for="select-size">Select a Size:</label>
                                                    <ul id="select-size" class="d-inline-block list-unstyled">
                                                        <li><a href="#">S</a></li>
                                                        <li><a href="#">M</a></li>
                                                        <li><a href="#">L</a></li>
                                                        <li><a href="#">XL</a></li>
                                                        <li><a href="#">XXL</a></li>
                                                    </ul>
                                                </div>
                                                <div class="select-color py-2 px-2">
                                                    <label for="select-color">Select a Color:</label>
                                                    <ul id="select-color" class="d-flex list-unstyled">
                                                        <li><a href="#" class="bg-white">White</a></li>
                                                        <li><a href="#" class="bg-success">Green</a></li>
                                                        <li><a href="#" class="bg-dark">BLACK</a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-quantity py-2 px-2">
                                                    <label for="input-number">Quantity:</label>
                                                    <input type="number" class="qty-input w-25" value="0" id="input-number"/>
                                                </div>
                                            </div>



                                            <a href="#" class="d-block btn-quick-action">Add to Cart</a>
                                        </div>

                                    </div>
                                </div>

                            </li>
                            <li>
                                <div class="product-item-fusion">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/dress-3.jpg" class="img-fluid" alt= "">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="#">Baby Powder</a></h4>
                                        <div class="price-content d-flex justify-content-between">
                                            <div class="show-price">
                                                $500
                                                <span class="discount-price  text-truncate ml-1">$600</span>
                                            </div>
                                            <div class="price-discount">
                                                20% off
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-quick-view">
                                        <div class="quick-view-content position-relative">
                                            <h5 class="mb-0">Buy The Product</h5>
                                            <div class="quick-content">
                                                <div class="select-size py-2 px-2">
                                                    <label for="select-size">Select a Size:</label>
                                                    <ul id="select-size" class="d-inline-block list-unstyled">
                                                        <li><a href="#">S</a></li>
                                                        <li><a href="#">M</a></li>
                                                        <li><a href="#">L</a></li>
                                                        <li><a href="#">XL</a></li>
                                                        <li><a href="#">XXL</a></li>
                                                    </ul>
                                                </div>
                                                <div class="select-color py-2 px-2">
                                                    <label for="select-color">Select a Color:</label>
                                                    <ul id="select-color" class="d-flex list-unstyled">
                                                        <li><a href="#" class="bg-white">White</a></li>
                                                        <li><a href="#" class="bg-success">Green</a></li>
                                                        <li><a href="#" class="bg-dark">BLACK</a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-quantity py-2 px-2">
                                                    <label for="input-number">Quantity:</label>
                                                    <input type="number" class="qty-input w-25" value="0" id="input-number"/>
                                                </div>
                                            </div>



                                            <a href="#" class="d-block btn-quick-action">Add to Cart</a>
                                        </div>

                                    </div>
                                </div>

                            </li>
                            <li>
                                <div class="product-item-fusion">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/dress-4.jpg" class="img-fluid" alt= "">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="#">Baby Powder</a></h4>
                                        <div class="price-content d-flex justify-content-between">
                                            <div class="show-price">
                                                $500
                                                <span class="discount-price  text-truncate ml-1">$600</span>
                                            </div>
                                            <div class="price-discount">
                                                20% off
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-quick-view">
                                        <div class="quick-view-content position-relative">
                                            <h5 class="mb-0">Buy The Product</h5>
                                            <div class="quick-content">
                                                <div class="select-size py-2 px-2">
                                                    <label for="select-size">Select a Size:</label>
                                                    <ul id="select-size" class="d-inline-block list-unstyled">
                                                        <li><a href="#">S</a></li>
                                                        <li><a href="#">M</a></li>
                                                        <li><a href="#">L</a></li>
                                                        <li><a href="#">XL</a></li>
                                                        <li><a href="#">XXL</a></li>
                                                    </ul>
                                                </div>
                                                <div class="select-color py-2 px-2">
                                                    <label for="select-color">Select a Color:</label>
                                                    <ul id="select-color" class="d-flex list-unstyled">
                                                        <li><a href="#" class="bg-white">White</a></li>
                                                        <li><a href="#" class="bg-success">Green</a></li>
                                                        <li><a href="#" class="bg-dark">BLACK</a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-quantity py-2 px-2">
                                                    <label for="input-number">Quantity:</label>
                                                    <input type="number" class="qty-input w-25" value="0" id="input-number"/>
                                                </div>
                                            </div>



                                            <a href="#" class="d-block btn-quick-action">Add to Cart</a>
                                        </div>

                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="round-shape-list">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="categories-products bg-white rounded mb-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-style-2nd mt-3 mb-4">
                                    <ul class="d-flex list-unstyled align-items-center">
                                        <li><a href="#">Explore popular All categories</a></li>
                                        <li><a href="#" class="see-all">See All</a> <i class="fa fa-arrow-right ml-2"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-3 mb-4">
                                <div class="category-item">
                                    <h4><a href="#">Phones & Accessories</a></h4>
                                    <ul class="list-unstyled d-flex">
                                        <li class="d-inline-block"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/categories/phone-1.png" class="img-fluid" alt=""></a></li>
                                        <li class="d-inline-block"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/categories/phone-2.png" class="img-fluid" alt=""></a></li>
                                        <li class="d-inline-block"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/categories/phone-3.png" class="img-fluid" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 mb-4">
                                <div class="category-item">
                                    <h4><a href="#">Home Projects</a></h4>
                                    <ul class="list-unstyled d-flex">
                                        <li class="d-inline-block"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/categories/home-1.png" class="img-fluid" alt=""></a></li>
                                        <li class="d-inline-block"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/categories/home-2.png" class="img-fluid" alt=""></a></li>
                                        <li class="d-inline-block"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/categories/home-3.png" class="img-fluid" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 mb-4">
                                <div class="category-item">
                                    <h4><a href="#">Jewelry & Accessories</a></h4>
                                    <ul class="list-unstyled d-flex">
                                        <li class="d-inline-block"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/categories/jewelry-1.png" class="img-fluid" alt=""></a></li>
                                        <li class="d-inline-block"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/categories/jewelry-2.png" class="img-fluid" alt=""></a></li>
                                        <li class="d-inline-block"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/categories/jewelry-3.png" class="img-fluid" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 mb-4">
                                <div class="category-item">
                                    <h4><a href="#">Men's Fashion</a></h4>
                                    <ul class="list-unstyled d-flex">
                                        <li class="d-inline-block"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/categories/fashion-1.png" class="img-fluid" alt=""></a></li>
                                        <li class="d-inline-block"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/categories/fashion-2.png" class="img-fluid" alt=""></a></li>
                                        <li class="d-inline-block"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/categories/fashion-3.png" class="img-fluid" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 mb-4">
                                <div class="category-item">
                                    <h4><a href="#">Glossary Need</a></h4>
                                    <ul class="list-unstyled d-flex">
                                        <li class="d-inline-block"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/glossary/1.png" class="img-fluid" alt=""></a></li>
                                        <li class="d-inline-block"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/glossary/2.png" class="img-fluid" alt=""></a></li>
                                        <li class="d-inline-block"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/glossary/3.png" class="img-fluid" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 mb-4">
                                <div class="category-item">
                                    <h4><a href="#">Creators & Designers</a></h4>
                                    <ul class="list-unstyled d-flex">
                                        <li class="d-inline-block"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/categories/designers-1.png" class="img-fluid" alt=""></a></li>
                                        <li class="d-inline-block"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/categories/designers-2.png" class="img-fluid" alt=""></a></li>
                                        <li class="d-inline-block"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/categories/designers-3.png" class="img-fluid" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 mb-4">
                                <div class="category-item">
                                    <h4><a href="#">Baby & Women Fashion</a></h4>
                                    <ul class="list-unstyled d-flex">
                                        <li class="d-inline-block"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/dress-1.jpg" class="img-fluid" alt=""></a></li>
                                        <li class="d-inline-block"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/dress-2.jpg" class="img-fluid" alt=""></a></li>
                                        <li class="d-inline-block"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/dress-3.jpg" class="img-fluid" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 mb-4">
                                <div class="category-item">
                                    <h4><a href="#">Accessories</a></h4>
                                    <ul class="list-unstyled d-flex">
                                        <li class="d-inline-block"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/categories/accessories-1.png" class="img-fluid" alt=""></a></li>
                                        <li class="d-inline-block"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/categories/accessories-2.png" class="img-fluid" alt=""></a></li>
                                        <li class="d-inline-block"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/categories/accessories-3.png" class="img-fluid" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="store-lists">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="store-lists-wrapper mb-5">
                        <div class="deal-heading d-flex justify-content-between align-items-center">
                            <h2>Top Stores</h2>
                            <div class="view-all">
                                <a href="#">View More</a>
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col-12 col-md-4">
                                <div class="seller-item">
                                    <div class="seller-products d-flex">
                                        <div class="seller-product-single">
                                            <a href="#">
                                                <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/seller/single-1.png" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="seller-product-double">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/seller/double-1.png" class="img-fluid" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/seller/double-2.png" class="img-fluid" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="seller-info mt-2 px-2 d-flex">
                                        <div class="seller-logo">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/seller/seller-logo-1.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="seller-name">
                                            <h5><a href="#">Focallure Official Store</a></h5>
                                            <p>Sun glass</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="seller-item">
                                    <div class="seller-products d-flex">
                                        <div class="seller-product-single">
                                            <a href="#">
                                                <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/seller/single-2.png" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="seller-product-double">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/seller/double-3.png" class="img-fluid" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/seller/double-4.png" class="img-fluid" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="seller-info mt-2 px-2 d-flex">
                                        <div class="seller-logo">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/seller/seller-logo-2.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="seller-name">
                                            <h5><a href="#">LIGE Official Store</a></h5>
                                            <p>Sun glass</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="seller-item">
                                    <div class="seller-products d-flex">
                                        <div class="seller-product-single">
                                            <a href="#">
                                                <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/seller/single-3.png" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="seller-product-double">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/seller/double-5.png" class="img-fluid" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/seller/double-6.png" class="img-fluid" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="seller-info mt-2 px-2 d-flex">
                                        <div class="seller-logo">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/seller/seller-logo-3.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="seller-name">
                                            <h5><a href="#">SULARANTA Official Store</a></h5>
                                            <p>Sun glass</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flash-sale">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="flash-sale-wrapper mb-5">
                        <div class="deal-heading d-flex justify-content-between align-items-center">
                            <h2>More To Love</h2>
                            <div class="view-all">
                                <a href="#">View More</a>
                            </div>
                        </div>

                        <ul class="flash-sale-items list-unstyled my-4  d-block d-md-flex ">
                            <li>
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/more-love/1.png" class="img-fluid" alt= "">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="#">Baby Powder</a></h4>
                                        <div class="price-content d-flex justify-content-between">
                                            <div class="show-price">
                                                $500
                                                <span class="discount-price  text-truncate ml-1">$600</span>
                                            </div>
                                            <div class="price-discount">
                                                20% off
                                            </div>
                                        </div>
                                        <div class="product-actions d-flex justify-content-between">
                                            <div class="product-qty">
                                                <label for="input-number"></label>
                                                <input type="number" class="qty-input" value="0" id="input-number"/>
                                            </div>
                                            <div class="product-add-to-cart">
                                                <a href="#" class="btn">Add to Cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/more-love/2.png" class="img-fluid" alt= "">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="#">Baby Powder</a></h4>
                                        <div class="price-content d-flex justify-content-between">
                                            <div class="show-price">
                                                $500
                                                <span class="discount-price  text-truncate ml-1">$600</span>
                                            </div>
                                            <div class="price-discount">
                                                20% off
                                            </div>
                                        </div>
                                        <div class="product-actions d-flex justify-content-between">
                                            <div class="product-qty">
                                                <label for="input-number"></label>
                                                <input type="number" class="qty-input" value="0" id="input-number"/>
                                            </div>
                                            <div class="product-add-to-cart">
                                                <a href="#" class="btn">Add to Cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/more-love/3.png" class="img-fluid" alt= "">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="#">Baby Powder</a></h4>
                                        <div class="price-content d-flex justify-content-between">
                                            <div class="show-price">
                                                $500
                                                <span class="discount-price  text-truncate ml-1">$600</span>
                                            </div>
                                            <div class="price-discount">
                                                20% off
                                            </div>
                                        </div>
                                        <div class="product-actions d-flex justify-content-between">
                                            <div class="product-qty">
                                                <label for="input-number"></label>
                                                <input type="number" class="qty-input" value="0" id="input-number"/>
                                            </div>
                                            <div class="product-add-to-cart">
                                                <a href="#" class="btn">Add to Cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/more-love/4.png" class="img-fluid" alt= "">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="#">Baby Powder</a></h4>
                                        <div class="price-content d-flex justify-content-between">
                                            <div class="show-price">
                                                $500
                                                <span class="discount-price  text-truncate ml-1">$600</span>
                                            </div>
                                            <div class="price-discount">
                                                20% off
                                            </div>
                                        </div>
                                        <div class="product-actions d-flex justify-content-between">
                                            <div class="product-qty">
                                                <label for="input-number"></label>
                                                <input type="number" class="qty-input" value="0" id="input-number"/>
                                            </div>
                                            <div class="product-add-to-cart">
                                                <a href="#" class="btn">Add to Cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/more-love/5.png" class="img-fluid" alt= "">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="#">Baby Powder</a></h4>
                                        <div class="price-content d-flex justify-content-between">
                                            <div class="show-price">
                                                $500
                                                <span class="discount-price  text-truncate ml-1">$600</span>
                                            </div>
                                            <div class="price-discount">
                                                20% off
                                            </div>
                                        </div>
                                        <div class="product-actions d-flex justify-content-between">
                                            <div class="product-qty">
                                                <label for="input-number"></label>
                                                <input type="number" class="qty-input" value="0" id="input-number"/>
                                            </div>
                                            <div class="product-add-to-cart">
                                                <a href="#" class="btn">Add to Cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="featured-deals">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="featured-band-wrapper">
                        <div class="row d-flex align-items-center">
                            <div class="col-12 col-md-3">
                                <div class="heading-style-2 ">
                                    <h2 class="mb-3">DEALS</h2>
                                </div>
                            </div>
                            <div class="col-12 col-md-9">
                                <div class="heading-style-2 ">
                                    <label class="border-label"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="heading-style-content p-3">
                                    <h4>From 10% OFF</h4>
                                    <p>Deals Going to end in Band:</p>
                                    <ul class="list-unstyled d-flex">
                                        <li>00</li>
                                        <li>00</li>
                                        <li>00</li>
                                        <li>00</li>
                                    </ul>
                                    <a class="see-band-btn" href="#">See All Offers</a>
                                </div>
                            </div>
                            <div class="col-12 col-md-8">
                                <div class="product-content">
                                    <ul class="featured-collection-wrapper d-flex">
                                        <li class="featured-collections d-flex align-items-center">
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <a href="#">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/cable.jpg" class="img-fluid" alt= "">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <h4><a href="#">Baby Powder</a></h4>
                                                    <div class="price-content d-flex justify-content-between">
                                                        <div class="show-price">
                                                            $500
                                                            <span class="discount-price  text-truncate ml-1">$600</span>
                                                        </div>
                                                        <div class="price-discount">
                                                            20% off
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="featured-collections d-flex align-items-center ml-3">
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <a href="#">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/cable.jpg" class="img-fluid" alt= "">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <h4><a href="#">Baby Powder</a></h4>
                                                    <div class="price-content d-flex justify-content-between">
                                                        <div class="show-price">
                                                            $500
                                                            <span class="discount-price  text-truncate ml-1">$600</span>
                                                        </div>
                                                        <div class="price-discount">
                                                            20% off
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="featured-band-wrapper">
                        <div class="row d-flex align-items-center">
                            <div class="col-12 col-md-3">
                                <div class="heading-style-2 ">
                                    <h2 class="mb-3">Featured Brands</h2>
                                </div>
                            </div>
                            <div class="col-12 col-md-9">
                                <div class="heading-style-2 ">
                                    <label class="border-label"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-5">
                                <div class="heading-style-content p-3">
                                    <p>Deals Going to all band</p>
                                    <a class="see-band-btn" href="#">See All Band</a>
                                </div>
                            </div>
                            <div class="col-12 col-md-7">
                                <div class="product-content">
                                    <ul class="featured-collection-wrapper list-unstyled d-flex">
                                        <li class="featured-collection">
                                            <div class="collection-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/cameras.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="collection-content">
                                                <h4>Catch Big <span>HP</span></h4>
                                                <a href="#">Shop Now <i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </li>
                                        <li class="featured-collection">
                                            <div class="collection-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/MobileDevicesv2-2.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="collection-content">
                                                <h4>Shop the  <span>Hottest</span></h4>
                                                <a href="#">Shop Now <i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="round-shape-list why-we-are bg-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading-style-2nd my-5">
                        <ul class="d-flex list-unstyled align-items-center">
                            <li><a href="#">Why Qcash eCommerce?</a></li>
                            <li><a href="#" class="see-all">See All</a> <i class="fa fa-arrow-right ml-2"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="round-shape-list-items list-unstyled d-block d-lg-flex mb-5">
                        <li class="d-inline-block text-center">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/money-back.png" class="img-fluid rounded-circle" alt="">
                                <h4>Money Back Guarantee</h4>
                            </a>
                        </li>
                        <li class="d-inline-block text-center">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/top-seler.png" class="img-fluid rounded-circle" alt="">
                                <h4>Top-Rated Sellers</h4>
                            </a>
                        </li>
                        <li class="d-inline-block text-center">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/get-start.png" class="img-fluid rounded-circle" alt="">
                                <h4>Get Started on eBay</h4>
                            </a>
                        </li>
                        <li class="d-inline-block text-center">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/discover.png" class="img-fluid rounded-circle" alt="">
                                <h4>Discover the eBay App</h4>
                            </a>
                        </li>
                        <li class="d-inline-block text-center">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/item-offer.png" class="img-fluid rounded-circle" alt="">
                                <h4>80% of Items are 100% New</h4>
                            </a>
                        </li>
                        <li class="d-inline-block text-center">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/supper-deal.png" class="img-fluid rounded-circle" alt="">
                                <h4>Super Deals</h4>
                            </a>
                        </li>
                        <li class="d-inline-block text-center">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/static/dist/img/check-shipping-status.png" class="img-fluid rounded-circle" alt="">
                                <h4>Check Shipping Status</h4>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>