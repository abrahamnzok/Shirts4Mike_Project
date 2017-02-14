<?php
declare (strict_types=1);
$host = 'localhost';
$base = 'shirts4mike';
$user = 'root';
$password = 'root';
global $connect;
global $query;
global $query_result;

try{
    $connect = new PDO("mysql::host=$host,dbname=$base",$user,$password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo $e->getMessage();
}

function get_db_products(){
    global $connect;
    $query = 'SELECT * FROM shirts4mike.products';
    $query_result = $connect->query($query)->fetchAll(PDO::FETCH_ASSOC);
    return $query_result;
}

$products = get_db_products();

function get_list_view_html(){
    global $products;
    foreach ($products as $db_products){
        echo to_string($db_products['sku'], $db_products);
    }
}

function get_last_four(){
    global $products;
    $size = count($products);
    $position = 0;
    $list_shirt = "";
    foreach ($products as $db_products){
        $position = $position + 1;
        if($size - $position < 4){
            $list_shirt = to_string($db_products['sku'],$db_products) . $list_shirt;
        }
    }
    echo $list_shirt;
}

function to_string($product_id, $product){
    $output = "";
    $output = $output . "<li>";
    $output = $output . '<a href="shirt.php?id='. $product_id . '&index = '. $product . ' ">';
    $output = $output . '<img src="'. $product["img"] . '" alt="'. $product["name"] . '">';
    $output = $output . "<p> View Details </p>";
    $output = $output . "</a>";
    $output = $output . "</li>";
    return $output;
}


