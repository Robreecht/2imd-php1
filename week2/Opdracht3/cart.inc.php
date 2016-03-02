<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<ul>
    <h1>Products in your cart:</h1>
<?php 
        
    if(empty($_SESSION['cart'])){
        echo "Empty cart";
    }
    else {
        foreach((array)$_SESSION['cart'] as $key) {
            echo "<li> Product: " . $products[$key]['name'] . " €" . $products[$key]['price'] . "</li>";
        }
    } 
?>
                     
</ul>
</body>
</html>