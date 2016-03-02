<?php
include_once("products.inc.php");
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Winkelmandje</title>
</head>
<body>
    <section>
       <?php foreach($products as $key => $product):?>
       <article>
       <a href="detail.php?id=<?php echo $key; ?>">
           <?php echo $product['name']; ?>
           €<?php echo $product['price']; ?>
           <img src="<?php echo $product['picture']; ?>"/>
       </a>
        <?php endforeach;?>     
        </article>  
    </section>
</body>
</html>