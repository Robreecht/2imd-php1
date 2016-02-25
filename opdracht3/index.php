<?php
    
    $todo = [
        [
            "beschrijving"  => "Maak opdracht af",
            "tijd"          => 40,
            "categorie"     => "School"
        ],
        [
            "beschrijving"  => "Maak to do lijst",
            "tijd"          => 30,
            "categorie"     => "School"
        ],
        [
            "beschrijving"  => "Sporten",
            "tijd"          => 30,
            "categorie"     => "Thuis"
        ],
        [
            "beschrijving"  => "Zet opdracht op toledo",
            "tijd"          => 5,
            "categorie"     => "School"
        ],
        [
            "beschrijving"  => "Wekker zetten",
            "tijd"          => 1,
            "categorie"     => "Thuis"
        ]
    ];

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To Do</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        foreach ($todo as $task): ?>
           <?php
                if ($task["tijd"]>30) {
                    $kleur = "rood";
                }
                if ($task["tijd"]<=30 && $task["tijd"]>15) {
                    $kleur = "oranje";
                }
                if ($task["tijd"]<15) {
                    $kleur = "geel";
                }
            ?>
        <article id="<?php echo $kleur; ?>">
            <div>
                <h3><?php echo $task['beschrijving']; ?></h3>
            </div> 
            <div>
                <h3><?php echo $task['categorie']; ?></h3>
            </div>        
        </article>
            
    <?php endforeach; ?>

</body>
</html>