<?php 

    $censored_word = $_GET['word-to-censor'];
    $sentence = $_GET['user-sentence'];

    $censored_sentence = str_replace($censored_word, '***', $sentence);
    echo "$censored_word 
    $sentence
    $censored_sentence"

?>



<!-- <!DOCTYPE html>
<html lang="it">
<head> -->

    <!-- characters and viewport tags -->
    <!-- <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->

    <!-- SEO tags -->
    <!-- <meta name="author" content="Serena Malusà" />
    <meta name="description" content="php exercise"> -->

    <!-- title and icon -->
    <!-- <title>Everlead</title>
    <link rel="icon" href="./imgs/logo-small.ico"> -->

    <!-- CSS -->
    <!-- Bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
<!-- 
</head>
<body>
    
</body>
</html> -->