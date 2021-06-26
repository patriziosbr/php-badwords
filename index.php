<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p> 
            <?php 
                echo $stringa = "Take me down to the Paradise City
                Where the grass is green and the girls are pretty
                (Take me home) Oh, won't you please take me home?
                Take me down to the Paradise City
                Where the grass is green and the girls are pretty
                (Take me home) Oh, won't you please take me home?";
            ?>
        </p>

        <h4>Lunghezza paragrafo orignale: 
            <?php 
                echo strlen($stringa);
            ?>
        </h4>

        <?php
            $ricerca = $_GET["parola"];
        ?>

        <h2>la parola ricercata: 
            <?php 
                echo $ricerca;
            ?>
        </h2>

        <p> 
            <?php 
                $censored = str_replace($ricerca, "***", $stringa);
                echo $censored;
            ?>
        </p>

        <h4>Lunghezza stringa: 
            <?php 
                echo strlen($censored);
            ?>
        </h4>

    </body>
