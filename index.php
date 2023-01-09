<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Stampa testo e lunghezza -->
    <h1>
        <?php
        $text = '    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit labore velit deleniti, exercitationem, fuga hic quae obcaecati eum consequuntur ipsa ex necessitatibus aliquam modi nihil facilis alias ratione est similique.';
        $length = strlen($text) ;
        $paragrafer= $text . ' Length = ' . $length . ' characters';
        echo $paragrafer
        ?>
    </h1>


    <!-- nasconde le parole dell'utente -->
    <h2>
        <?php
            $hiddenWord = '';
            $result= str_replace($_GET['hiddenWord'],"***", $paragrafer);
            echo $result
        ?>
    </h2>
</body>
</html>