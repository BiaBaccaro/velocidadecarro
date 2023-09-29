<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multa ou não</title>
</head>
<body>

    <?php

    $velocidade = 40;
    if ($velocidade >= 41 && $velocidade <= 50) {
        echo "Você esta na velocidade correta";
    } elseif ($velocidade = 40) {
        echo "Atenção";
    } elseif ($velocidade > 50) {
        echo "Você foi multado";
    }

    ?>
    
</body>
</html>
