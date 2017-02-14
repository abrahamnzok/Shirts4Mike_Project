<?php
include ('inc/products.php');
global $product;
$product_id = $_GET["id"];
$products = get_db_products();
$section = "Shirts";
$page_title = $products["name"];
foreach ($products as $db_product){
    if(in_array($product_id, $db_product)){
        $product = $db_product;
    }
}
include ('inc/header.php');
?>

    <div class="section page">
        <div class="wrapper">
            <div class="breadcrumb">
                <a href="shirts.php"> Shirts </a>&gt
                <?php echo $product["name"];?>
            </div>
            <div class="shirt-picture">
                <span>
                    <img src="<?php echo $product["img"];?>" alt="<?php echo $product["name"];?>"
                </span>
            </div>
            <div class="shirt-details">
                <h1>
                    <span class="price">$<?php echo $product["price"];?></span>
                    <?php echo $product["name"];?>
                    <p class="note-designer">All Shirts are designed by Ilaan Brahms</p>
                </h1>
            </div>
        </div>
    </div>

<?php
include ('inc/footer.php');
?>

