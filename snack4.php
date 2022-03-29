<?php 
    $array = [];

    while (count($array)<15) {
        $random_nr = rand(1, 100);
        echo 'ciao';
        if (!in_array($random_nr, $array)) {
        $array[] = $random_nr;
        }
    }

    var_dump($array);
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
    
</body>
</html>