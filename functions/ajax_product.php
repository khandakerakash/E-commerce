<?php include("../includes/db.php"); ?>
<?php
global $con;

        $results = $con->query("SELECT * FROM products where product_cat=".$_POST['cat_id']);
        $products = [];

        while ($row_product = mysqli_fetch_assoc($results)){
            $products[] = $row_product;
        }
        echo json_encode(["info"=>$products]);

?>

