<?php
    include ("includes/db.php");
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-Shop | Inser Product</title>

        <!-- Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <!-- Font-Awesome -->
        <link href="../css/font-awesome.min.css" rel="stylesheet">

        <link href="../css/price-range.css" rel="stylesheet">
        <!-- Animate -->
        <link href="../css/animate.min.css" rel="stylesheet">
        <!-- Pretty Photo -->
        <link href="../css/prettyPhoto.css" rel="stylesheet">
        <!-- Main CSS -->
        <link href="../css/style.css" rel="stylesheet">
        <!-- Responsive CSS -->
        <link href="../css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <!-- Preloader Start-->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!--Preloader End-->

    <!-- Insert Product Section -->
    <section id="insert_product">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header text-center">
                        <h2>Insert products for <span style="color: #FE980F;">E-shop</span></h2>
                    </div>
                    <!-- Product Upload Form -->
                    <form class="product-form" method="post" action="insert_product.php" enctype="multipart/form-data">
                        <div class="col-sm-5 col-sm-offset-1">
                            <div class="form-group">
                                <label>Product Title</label>
                                <input type="text" name="product_title" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Product Category</label>
                                <select class="form-control" name="product_cat">
                                    <option>Select a Category</option>
                                    <?php

                                    $get_cats = "SELECT * FROM categories";

                                    $run_cats = mysqli_query($con, $get_cats);

                                    while ($row_cats = mysqli_fetch_array($run_cats)){

                                        $cat_id = $row_cats['cat_id'];
                                        $cat_title = $row_cats['cat_title'];

                                        echo "<option value='$cat_id'>$cat_title</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Product Brand</label>
                                <select class="form-control" name="product_brand">
                                    <option>Select a Brand</option>
                                    <?php

                                    $get_brands = "SELECT * FROM brands";

                                    $run_brands = mysqli_query($con, $get_brands);

                                    while ($row_brands = mysqli_fetch_array($run_brands)){

                                        $brand_id = $row_brands['brand_id'];
                                        $brand_title = $row_brands['brand_title'];

                                        echo "<option value='$brand_id'>$brand_title</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Product Image</label>
                                <input type="file"  name="product_image" class="filestyle file-input">
                                <!--<label class="custom-file">
                                    <input type="file" name="product_image" id="file" class="custom-file-input">
                                    <span class="custom-file-control"></span>
                                </label>-->
                            </div>
                            <div class="form-group">
                                <label>Product Price</label>
                                <input type="text" name="product_price" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Product Keyword</label>
                                <input type="text" name="product_keywords" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Product Description</label>
                                <textarea id="message" name="product_desc" class="form-control" rows="8"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="insert_post" class="btn btn-primary btn-lg">Insert Product</button>
                            </div>
                        </div>
                    </form>
                    <!-- Product Upload Form -->
                </div>
            </div>
        </div>
    </section>
    <!-- Insert Product Section -->

    <footer>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright &copy; 2016 E-SHOP. All rights reserved.</p>
                    <p class="pull-right">Developed By <span><a target="_blank" href="https://github.com/khanadakerakash">Kh Akash</a></span></p>
                </div>
            </div>
        </div>
    </footer><!--/Footer-->

    <!-- Scroll Up -->
    <a href="#0" class="cd-top">Top</a>
    <!-- Scroll Up -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/price-range.js"></script>
    <script src="../js/modernizr.js"></script>
    <script src="../js/scorl-up-script.js"></script>
    <script src="../js/myScript.js"></script>
    <!-- For textarea editor -->
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    <!-- For textarea editor -->
    </body>
</html>

<!-- Insert The Product Into Database -->
<?php

    if(isset($_POST['insert_post'])){

        // Getting the text data from the fields
        $product_title = $_POST['product_title'];
        $product_cat = $_POST['product_cat'];
        $product_brand = $_POST['product_brand'];
        $product_price = $_POST['product_price'];
        $product_keywords = $_POST['product_keywords'];
        $product_desc = $_POST['product_desc'];

        // Getting the image from the field
        $product_image = $_FILES['product_image']['name'];
        $product_image_tmp = $_FILES['product_image']['tmp_name'];

        move_uploaded_file($product_image_tmp,"product_images/$product_image");

        // INSERT QUERY
        $insert_product = "insert into products (product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords) values ('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";

        $run_insert_product = mysqli_query($con, $insert_product);

        if ($run_insert_product){

            echo "<script>alert('Product has been inserted!')</script>";
            echo "<script>window.open('insert_product.php','_self')</script>";
        }
    }
?>
<!-- Insert The Product Into Database -->