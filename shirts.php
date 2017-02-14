<?php
$page_title = 'Shirts';
$section = $page_title;
include('inc/products.php');
include ('inc/header.php'); ?>
<div class="section shirts page">
    <div class="wrapper">
        <h1>Shirts</h1>
        <ul class="products">
            <?php
                get_list_view_html();
            ?>
        </ul>
    </div>
</div>
<?php include ('inc/footer.php'); ?>
