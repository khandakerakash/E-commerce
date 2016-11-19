<?php include('header.php');?>
<?php include ("functions/functions.php");?>
    <!-- Start Category & Features Section -->
    <section id="products-category-features" style="margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <?php getCategories(); ?>
                        </div><!--/category-products-->

                        <div class="brands_products"><!--brands_products-->
                            <h2>Brands</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <?php getBrands(); ?>
                                </ul>
                            </div>
                        </div><!--/brands_products-->

                        <div class="price-range"><!--price-range-->
                            <h2>Price Range</h2>
                            <div class="well text-center">
                                <div class="slider slider-horizontal" style="width: 150px;"><div class="slider-track"><div class="slider-selection" style="left: 41.6667%; width: 33.3333%;"></div><div class="slider-handle round left-round" style="left: 41.6667%;"></div><div class="slider-handle round" style="left: 75%;"></div></div><div class="tooltip top" style="top: -30px; left: 54px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">250 : 450</div></div><input class="span2" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" style="" type="text"></div><br>
                                <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div><!--/price-range-->

                        <div class="shipping text-center"><!--shipping-->
                            <img src="images/shipping.jpg" alt="Price">
                        </div><!--/shipping-->

                    </div><!--/ .left-sidebar -->
                </div>

                <!-- Fetures Area -->
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Features Items</h2>
                        <div class="row">
                            <?php

                                if(isset($_GET['pro_id'])){

                                    $check_product_id = $_GET['pro_id'];

                                    $get_product = "SELECT * FROM products WHERE product_id = '$check_product_id'";

                                    $run_product = mysqli_query($con, $get_product);

                                    while ($row_product = mysqli_fetch_array($run_product)){

                                        $product_id = $row_product['product_id'];
                                        $product_title = $row_product['product_title'];
                                        $product_price = $row_product['product_price'];
                                        $product_image = $row_product['product_image'];
                                        $product_desc = $row_product['product_desc'];

                                        echo "
                        
                                             <div class='product-image-wrapper'>
                                                    <div class='single-products'>
                                                        <div class='product-info text-center'>
                                                            <div class='col-sm-8'>
                                                                <img class='img-responsive' src='admin_area/product_images/$product_image' alt=''>
                                                            </div>
                                                            <div class='col-sm-4'>	
                                                                <h2>$ $product_price</h2>
                                                                <p>$product_title</p>
                                                                <p>$product_desc</p>
                                                                <a href='add_to_cart.php?add_cart=$product_id' class='pull-left btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
                                                                <a href='all_products.php' class='pull-right btn btn-default add-to-cart'><i class='fa fa-backward'></i>Go Back</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        ";
                                    }
                                }
                            ?>
                        </div>
                    </div><!--features_items-->
                </div>
                <!-- Fetures Area -->
            </div>
        </div>
    </section>
    <!-- End Category & Features Section -->
<?php include('footer.php');?>