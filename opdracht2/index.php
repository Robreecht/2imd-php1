<?php
    global $page;
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <ul>
            <li <?php if ($page=="Home") echo "id='currentpage'" ?>><a href="home.php" >HOME</a></li>
            <li <?php if ($page=="Contact") echo "id='currentpage'" ?>><a href="contact.php" >CONTACT</a></li>
        </ul>
        <h1><?php echo $page; ?></h1> 
    </nav>    
</body>
</html>