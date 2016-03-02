<?php
    session_start();

        if(!isset($_SESSION['cart'])){
            $_SESSION['cart'] = array();
        } 

        if(isset($_POST['key'])){
            $_SESSION['cart'][] = $_POST['key'];
        }

    include_once("products.inc.php");
var_dump($_POST['key']);

$key = $_GET['id']; 
$product = $products[$key];

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail</title>
</head>
<body>
   <a href="products.php">Back to shop</a>
    <h1><?php echo $product["name"]; ?></h1>
    <h1>€<?php echo $product["price"]; ?></h1>
    <img src="<?php echo $product["picture"]; ?>"/>
    <form action="" method="post">
        <?php echo '<input type="text" value="' . $key . '"name="key" hidden>'; ?>
        <input type="submit" value="Buy Now">
    </form>
    
    <?php include_once("cart.inc.php") ?>
</body>
</html>