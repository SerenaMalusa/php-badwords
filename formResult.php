<?php 

    // receive word and sentence from the form
    $word = $_GET['word-to-censor'];
    $sentence = $_GET['user-sentence'];

    // cycle for the lenght of word and add an * every time
    $censored_word = '';
    for ($i = 0; $i < strlen($word); $i++) {
        $censored_word = $censored_word.'*';
    };

    // replace the word with asteriscs in sentence and save it 
    $censored_sentence = str_replace($word, $censored_word, $sentence);
    // echo "$word $sentence $censored_sentence";

?>



<!DOCTYPE html>
<html lang="it">
<head>

    <!-- characters and viewport tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- SEO tags -->
    <meta name="author" content="Serena Malusà" />
    <meta name="description" content="php exercise">

    <!-- title and icon -->
    <title>PHP Badwords</title>
    <link rel="icon" href="./imgs/logo-small.ico">

    <!-- CSS -->
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
    <div class="container mt-5">

        <h2><?= $censored_sentence ?></h2>

        <p>
            <?php 
                echo "La parola da censurare era: {$word}. <br>                
                La frase originale era: {$sentence}"
            ?>
        </p>

    </div>

</body>
</html>