<?php
    $partite = [
        [
            'casa' => 'Basket Milano',
            'ospite' => 'Basket Roma',
            'punti_casa' => 45,
            'punti_ospite' => 21,
        ],
        [
            'casa' => 'Basket Pescara',
            'ospite' => 'Basket Chieti',
            'punti_casa' => 65,
            'punti_ospite' => 81,
        ],
        [
            'casa' => 'Basket Cosenza',
            'ospite' => 'Basket Vicenza',
            'punti_casa' => 27,
            'punti_ospite' => 69,
        ],
    ];

    // for ($i = 0; $i < count($partite); $i++) {
    //     echo $partite[$i]['casa'];
    //     echo '-';
    //     echo $partite[$i]['ospite'];
    // };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        for ($i = 0; $i < count($partite); $i++) {
            ?>
            <div><?php echo $partite[$i]['casa'] ?> - <?php echo $partite[$i]['ospite'] ?> | <?php echo $partite[$i]['punti_casa'] ?> - <?php echo $partite[$i]['punti_ospite'] ?></div>
            <?php
        }
    ?>
</body>
</html>
