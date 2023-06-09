<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $firstName = "Chris";
    $age = 30;
    echo "Hello {$firstName}!<br>";
    echo "Vous avez {$age} ans.";

    $vegetables = ["tomate", "concombre", "aubergine"];
    echo "<pre>";
    print_r($vegetables);

    //unset($vegetables[1]);
    array_splice($vegetables, 1, 1);

    print_r($vegetables);
    echo "</pre>";
    ?>
</body>

</html>