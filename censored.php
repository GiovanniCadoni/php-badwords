<?php

$paragraph = $_GET['paragraph'];
$censWord = $_GET['cens-word'];

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Paragraph:</h2>
    <p> <?php echo $paragraph ?> </p>
    
    <?php
    $length = strlen($paragraph);
    ?>
    
    <p> Il paragrafo è lungo <strong><?php echo $length ?></strong> caratteri. </p>

    <h2>Censored</h2>
    
    <?php
    $censString = str_replace($censWord, '***', $paragraph);
    ?>

    <p> <?php echo $censString; ?> </p>

    <?php
    $lengthCens = strlen($censString);
    ?>
    
    <p> Il paragrafo è lungo <strong><?php echo $lengthCens ?></strong> caratteri. </p>
    
</body>
</html>