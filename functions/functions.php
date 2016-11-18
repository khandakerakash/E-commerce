<?php
    // Database establishing
    $con = mysqli_connect("localhost", "root", "", "ecommerce_db");

    // Getting the categories for categoy menu
    function getCategories(){

        global $con;

        $get_cats = "SELECT * FROM categories";

        $run_cats = mysqli_query($con, $get_cats);

        while ($row_cats = mysqli_fetch_array($run_cats)){

            $cat_id = $row_cats['cat_id'];
            $cat_title = $row_cats['cat_title'];

            echo "<div class=\"panel panel-default\">
				    <div class=\"panel-heading\">
					    <h4 class=\"panel-title\"><a href='index.php?cat_id=$cat_id'><i class=\"fa fa-apple\"></i> $cat_title</a></h4>
					</div>
				  </div>";
        }
    }

    // Getting categories products
    function getCategoriesProduct(){

        if (isset($_GET['cat_id'])){

            $get_cat_products_id = $_GET['cat_id'];

            global $con;

            $get_cat_products = "SELECT * FROM products WHERE product_cat='$get_cat_products_id'";

            $run_get_cat_products = mysqli_query($con, $get_cat_products);

            $count_get_cat_products = mysqli_num_rows($run_get_cat_products);

            if ($count_get_cat_products == 0){

                echo "<h1 style='text-align: center; color: #c0392b;'>There is no products in this catergory!!</h1>";

            }else{

                while ($row_cat_products = mysqli_fetch_array($run_get_cat_products)){

                    $product_id = $row_cat_products['product_id'];
                    $product_title = $row_cat_products['product_title'];
                    $product_cat = $row_cat_products['product_cat'];
                    $product_brand = $row_cat_products['product_brand'];
                    $product_price = $row_cat_products['product_price'];
                    $product_image = $row_cat_products['product_image'];

                    echo "
                         <div class='col-sm-4'>
                            <div class='product-image-wrapper'>
                                <div class='single-products'>
                                    <div class='product-info text-center'>
                                        <img class='img-responsive' src='admin_area/product_images/$product_image' alt=''>
                                        <h2>$ $product_price</h2>
                                        <p>$product_title</p>
                                        <a href='index.php?pro_id=$product_id' class='pull-left btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
                                        <a href='product_details.php?pro_id=$product_id' class='pull-right btn btn-default add-to-cart'><i class='fa fa-info-circle'></i>Details</a>
                                    </div>
                                </div>
                            </div>
                         </div> 
                        ";
                }
            }
        }
    }


    // Getting the brands for brands menu
    function getBrands(){

        global $con;

        $get_brands = "SELECT * FROM brands";

        $run_brands = mysqli_query($con, $get_brands);

        while ($row_brands = mysqli_fetch_array($run_brands)){

            $brand_id = $row_brands['brand_id'];
            $brand_title = $row_brands['brand_title'];

            echo "<li><a href='index.php?brand_id=$brand_id'>$brand_title</a></li>";
        }
    }

    // Getting brandwise products
    function getBrandWiseProducts(){

        if (isset($_GET['brand_id'])){

            $get_brand_product_id = $_GET['brand_id'];
           // echo $get_brand_product_id;


            global $con;

          //  $get_brand_products = "SELECT * FROM products WHRER product_brand=".$get_brand_product_id;
            $get_brand_products = "SELECT * FROM products WHERE product_brand=".$get_brand_product_id;

            $run_products = mysqli_query($con, $get_brand_products);
           // var_dump($run_products);
            $count_brand_products = mysqli_num_rows($run_products);

            if ($count_brand_products == 0){

                echo "<h1 style='text-align: center; color: #c0392b;'>There is no product in this brand!!</h1>";

            }else{

                while ($row_brand_products = mysqli_fetch_array($run_products)){

                    $product_id = $row_brand_products['product_id'];
                    $product_title = $row_brand_products['product_title'];
                    $product_cat = $row_brand_products['product_cat'];
                    $product_brand = $row_brand_products['product_brand'];
                    $product_price = $row_brand_products['product_price'];
                    $product_image = $row_brand_products['product_image'];

                    echo "
                            
                             <div class='col-sm-4'>
                                <div class='product-image-wrapper'>
                                    <div class='single-products'>
                                        <div class='product-info text-center'>
                                            <img class='img-responsive' src='admin_area/product_images/$product_image' alt=''>
                                            <h2>$ $product_price</h2>
                                            <p>$product_title</p>
                                            <a href='index.php?pro_id=$product_id' class='pull-left btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
                                            <a href='product_details.php?pro_id=$product_id' class='pull-right btn btn-default add-to-cart'><i class='fa fa-info-circle'></i>Details</a>
                                        </div>
                                    </div>
                                </div>
                             </div> 
                        ";
                }
            }
        }
    }

    // Getting all products
    function getAllProducts(){

        if (!isset($_GET['cat_id'])){
            if (!isset($_GET['brand_id'])){

                global $con;

                $get_product = "SELECT * FROM products ORDER BY RAND() LIMIT 0, 6";

                $run_product = mysqli_query($con, $get_product);

                while ($row_product = mysqli_fetch_array($run_product)){

                    $product_id = $row_product['product_id'];
                    $product_title = $row_product['product_title'];
                    $product_cat = $row_product['product_cat'];
                    $product_brand = $row_product['product_brand'];
                    $product_price = $row_product['product_price'];
                    $product_image = $row_product['product_image'];

                    echo "
                        
                         <div class='col-sm-4'>
                            <div class='product-image-wrapper'>
                                <div class='single-products'>
                                    <div class='product-info text-center'>
                                        <img class='img-responsive' src='admin_area/product_images/$product_image' alt=''>
                                        <h2>$ $product_price</h2>
                                        <p>$product_title</p>
                                        <a href='index.php?pro_id=$product_id' class='pull-left btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
                                        <a href='product_details.php?pro_id=$product_id' class='pull-right btn btn-default add-to-cart'><i class='fa fa-info-circle'></i>Details</a>
                                    </div>
                                </div>
                            </div>
                         </div> 
                    ";
                }
            }
        }
    }
?>

