<?php include("includes/db.php"); ?>
<?php
    // Getting the categories for categoy menu
    function getCategories(){

        global $con;

        $results = $con->query("SELECT * FROM categories");

        while ($row_cats = mysqli_fetch_array($results)){

            $cat_id = $row_cats['cat_id'];
            $cat_title = $row_cats['cat_title'];

            echo "<div class=\"panel panel-default\">
				    <div class=\"panel-heading\">
					    <h4 class=\"panel-title\"><a class='myCategory' data-cat='$cat_id' href='index.php?cat_id=$cat_id'><i class=\"fa fa-apple\"></i> $cat_title</a></h4>
					</div>
				  </div>";
        }
    }

    // Getting categories products
    function getCategoriesProduct(){

        if (isset($_GET['cat_id'])){

            $get_cat_products_id = $_GET['cat_id'];

            global $con;

            $results = $con->query("SELECT * FROM products WHERE product_cat='$get_cat_products_id'");

            $count_get_cat_products = mysqli_num_rows($results);

            if ($count_get_cat_products == 0){

                echo "<h1 style='text-align: center; color: #c0392b;'>There is no products in this catergory!!</h1>";

            }else{

                while ($row_cat_products = mysqli_fetch_array($results)){

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
                                        <a href='add_to_cart.php?add_cart=$product_id' class='pull-left btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
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

        $results = $con->query("SELECT * FROM brands");

        while ($row_brands = mysqli_fetch_array($results)){

            $brand_id = $row_brands['brand_id'];
            $brand_title = $row_brands['brand_title'];

            echo "<li><a class='myCategory' data-id='$brand_id' href='index.php?brand_id=$brand_id'>$brand_title</a></li>";
        }
    }

    // Getting brandwise products
    function getBrandWiseProducts(){

        if (isset($_GET['brand_id'])){

            $get_brand_product_id = $_GET['brand_id'];

            global $con;

            $results = $con->query("SELECT * FROM products WHERE product_brand='$get_brand_product_id'");

            $count_brand_products = mysqli_num_rows($results);

            if ($count_brand_products == 0){

                echo "<h1 style='text-align: center; color: #c0392b;'>There is no product in this brand!!</h1>";

            }else{

                while ($row_brand_products = mysqli_fetch_array($results)){

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
                                            <a href='add_to_cart.php?add_cart=$product_id' class='pull-left btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
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

                $results = $con->query("SELECT * FROM products ORDER BY RAND() LIMIT 0, 6");

                while ($row_product = mysqli_fetch_array($results)){

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
                                        <a href='add_to_cart.php?add_cart=$product_id' class='pull-left btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
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

    // Function for All products.php file

        // Getting the categories for categoy menu
        function getCatFor(){

            global $con;

            $results = $con->query("SELECT * FROM categories");

            while ($row_cats = mysqli_fetch_array($results)){

                $cat_id = $row_cats['cat_id'];
                $cat_title = $row_cats['cat_title'];

                echo "<div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\"><a href='all_products?cat_id=$cat_id'><i class=\"fa fa-apple\"></i> $cat_title</a></h4>
                            </div>
                          </div>";
            }
        }

        // Getting categories products
        function getCatProFor(){

            if (isset($_GET['cat_id'])){

                $get_cat_products_id = $_GET['cat_id'];

                global $con;

                $results = $con->query("SELECT * FROM products WHERE product_cat='$get_cat_products_id'");

                $count_get_cat_products = mysqli_num_rows($results);

                if ($count_get_cat_products == 0){

                    echo "<h1 style='text-align: center; color: #c0392b;'>There is no products in this catergory!!</h1>";

                }else{

                    while ($row_cat_products = mysqli_fetch_array($results)){

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
                                                <a href='add_to_cart.php?add_cart=$product_id' class='pull-left btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
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
        function getBrandsFor(){

            global $con;

            $results = $con->query("SELECT * FROM brands");

            while ($row_brands = mysqli_fetch_array($results)){

                $brand_id = $row_brands['brand_id'];
                $brand_title = $row_brands['brand_title'];

                echo "<li><a href='all_products.php?brand_id=$brand_id'>$brand_title</a></li>";
            }
        }

        // Getting brandwise products
        function getBrandWiseProFor(){

            if (isset($_GET['brand_id'])){

                $get_brand_product_id = $_GET['brand_id'];
                // echo $get_brand_product_id;


                global $con;

                $results = $con->query("SELECT * FROM products WHERE product_brand=".$get_brand_product_id);

                $count_brand_products = mysqli_num_rows($results);

                if ($count_brand_products == 0){

                    echo "<h1 style='text-align: center; color: #c0392b;'>There is no product in this brand!!</h1>";

                }else{

                    while ($row_brand_products = mysqli_fetch_array($results)){

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
                                                    <a href='add_to_cart.php?add_cart=$product_id' class='pull-left btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
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
        function getAllProductsFor(){

            if (!isset($_GET['cat_id'])){
                if (!isset($_GET['brand_id'])){

                    global $con;

                    $results = $con->query("SELECT * FROM products");

                    while ($row_product = mysqli_fetch_array($results)){

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
                                                <a href='add_to_cart.php?add_cart=$product_id' class='pull-left btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
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

    //For search_result.php file

        function getAllProductsForSearch(){

            if (isset($_GET['search'])){

                    $search_query = $_GET['user_query'];

                    global $con;

                    $results = $con->query("SELECT * FROM products WHERE product_keywords LIKE '%$search_query%'");

                    while ($row_product = mysqli_fetch_array($results)){

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
                                                        <a href='add_to_cart.php?add_cart=$product_id' class='pull-left btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
                                                        <a href='product_details.php?pro_id=$product_id' class='pull-right btn btn-default add-to-cart'><i class='fa fa-info-circle'></i>Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                         </div> 
                                    ";
                    }
            }
        }

    // For Add To Cart Functionality: add_to_cart.php

    // getting the user IP address
    function getIp() {
        $ip = $_SERVER['REMOTE_ADDR'];

        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }

        return $ip;
    }

    //creating the shopping cart
    function getCartProduct(){

        if (isset($_GET['add_cart'])){

            global $con;

            $ip = getIp();

            $add_cart_pro_id = $_GET['add_cart'];

            $results = $con->query( "SELECT * FROM add_to_cart WHERE ip_address='$ip' AND pro_id='$add_cart_pro_id'");

            if ($results->num_rows>0){

                echo "";

            }else{

                $results = $con->query("INSERT INTO add_to_cart 
                (pro_id, ip_address) VALUES  ('$add_cart_pro_id', '$ip')");

                echo $results;

                echo "Your cart is ready"; // this only testing perpous
            }
        }
    }
?>

