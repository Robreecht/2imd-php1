<?php
    $posts = [
        [
            "picture" => "img/image4.jpg", 
            "name" => "Theresa W.", 
            "location" => "Brooklyn, NY", 
            "post" => "East River Park", 
            "image" => "img/picture.jpg",
            "time" => 20],
        [
            "picture" => "img/image2.jpg", 
            "name" => "Nina M.", 
            "location" => "New York, NY", 
            "post" => "Rubirosa",
            "time" => 40],
        [
            "picture" => "img/image1.jpg", 
            "name" => "Sean B.", 
            "location" => "South of Market, San Francisco", 
            "post" => "Blue bottle coffee",
            "time" => 60],
        [
            "picture" => "img/image3.jpg", 
            "name" => "Mike A.", 
            "location" => "San Francisco", 
            "post" => "Land's .......",
            "time" => 80]
    ];

    $time= isset($_GET['time']) ? $_GET['time']:null;

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
       <?php include_once('header.php'); ?>
       <?php include_once('sort.php'); ?>
        
        <section class="timeline">
        <?php foreach ($posts as $post):
        if ($time=="oud"):
        if ($post["time"]>=60): ?>
        <article>
           <div>
               <img class="img" src="<?php echo $post['picture']; ?>" alt="<?php echo $post['name']; ?>">
           </div>
           <div class="text">
                <h3><?php echo $post['name']; ?></h3>
                <div id="post"><?php echo $post['post']; ?></div>
                <div id="location"><?php echo $post['location']; ?></div>
                <div id="time"><?php echo $post['time'] ?> minutes ago</div>
            <?php 
                if (!empty($post["image"])) {
                    echo '<img class="img_post" src="'.$post['image'].'">';              
                }
            ?>
            </div> 
            <hr> 
        </article>
        <?php endif; ?>
        <?php endif; ?>
        
        <?php if ($time=="recent"):
        if ($post['time']<60): ?>
        <article>
           <div>
               <img class="img" src="<?php echo $post['picture']; ?>" alt="<?php echo $post['name']; ?>">
           </div>
           <div class="text">
                <h3><?php echo $post['name']; ?></h3>
                <div id="post"><?php echo $post['post']; ?></div>
                <div id="location"><?php echo $post['location']; ?></div>
                <div id="time"><?php echo $post['time'] ?> minutes ago</div>
            <?php 
                if (!empty($post["image"])) {
                    echo '<img class="img_post" src="'.$post['image'].'">';              
                }
            ?>
            </div> 
            <hr> 
        </article>
        <?php endif; ?>
        <?php endif; ?> 
               
        <?php if ($time==""): ?>
        <article>
           <div>
               <img class="img" src="<?php echo $post['picture']; ?>" alt="<?php echo $post['name']; ?>">
           </div>
           <div class="text">
                <h3><?php echo $post['name']; ?></h3>
                <div id="post"><?php echo $post['post']; ?></div>
                <div id="location"><?php echo $post['location']; ?></div>
                <div id="time"><?php echo $post['time'] ?> minutes ago</div>
            <?php 
                if (!empty($post["image"])) {
                    echo '<img class="img_post" src="'.$post['image'].'">';              
                }
            ?>
            </div> 
            <hr> 
        </article>
        <?php endif; ?>
        <?php endforeach; ?>
        <?php include_once('footer.php'); ?>
    </section> 
</body>
</html>