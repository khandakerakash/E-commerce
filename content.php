<?php
	include ("functions/functions.php");
?>
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
							<?php
								getProducts();
							?>
						</div><!--features_items-->
					</div>
					<!-- Fetures Area -->
                </div>
            </div>
        </section>
        <!-- End Category & Features Section -->