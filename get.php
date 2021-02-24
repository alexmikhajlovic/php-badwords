<?php 
    $key = $_GET['word'];
    $text = 'PHP is a popular general-purpose scripting language that is especially suited to web development.';
    $censoredSentence = str_replace($key, '***', $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>

    <img src="https://cdn.iconscout.com/icon/free/png-256/php-2038871-1720084.png" alt="">

    <br>


    <h1><?php echo $text ?></h1>

    <br>
    <br>
    <br>

    <?php echo $censoredSentence ?>

    <p>
        <?php echo '(Length: ', strlen($censoredSentence), ')' ?>
    </p>

    
</body>
</html>