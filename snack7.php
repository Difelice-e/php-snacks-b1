<?php
$db = [
        [
            'name' => 'Pinco',
            'lastname' => 'Panco',
            'valutation' => [8, 9, 7, 8, 7],
        ],
        [
            'name' => 'Ugo',
            'lastname' => 'Fantozzi',
            'valutation' => [4, 6, 7, 4, 5],
        ],
        [
            'name' => 'Mario',
            'lastname' => 'Bianchi',
            'valutation' => [7, 6, 7, 8, 5],
        ],
    ];

    function calculate_average($array) {
        return array_sum($array) / count($array);
    }
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
        for ($i = 0; $i < count($db); $i++) {
            ?> <div>alunno:<?php echo $db[$i]['name'];?>  <?php echo$db[$i]['lastname']?> Voti: <?php echo calculate_average($db[$i]['valutation']) ?></div>
            <?php
        }
    ?>
</body>
</html>