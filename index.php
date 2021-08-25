<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <?php

        // assegno a una variabile una stringa
        $paragraph = "Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Deleniti vero tempore ipsam, eaque aliquid nam repellat. Autem corporis
            aliquid adipisci eveniet! Vitae quam eveniet similique est, iure impedit eos quisquam!
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Deleniti vero tempore ipsam, eaque aliquid nam repellat. Autem corporis
            aliquid adipisci eveniet! Vitae quam eveniet similique est, iure impedit eos quisquam!
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Deleniti vero tempore ipsam, eaque aliquid nam repellat. Autem corporis
            aliquid adipisci eveniet! Vitae quam eveniet similique est, iure impedit eos quisquam!";

        // assegno a una variabile il valore della lunghezza della stringa
        $paragraphLength = strlen($paragraph);

        // assegno a una variabile il valore del parametro get "censor"
        $censoredWord = $_GET['censor'];

        // rimpiazzo con tre asterischi la parola che l'utente ha passato per il parametro "censor"
        $censoredParagraph = str_replace($censoredWord, '***', $paragraph);

        // // assegno a una variabile il valore della lunghezza del paragrafo censurato
        $censoredParagraphLength = strlen($censoredParagraph);

    ?>

    <!-- stampo la stringa e la sua lunghezza -->
    <h3>Il seguente paragrafo è lungo <?php echo $paragraphLength ?> caratteri:</h3>
    
    <p><?php echo $paragraph ?></p>

    <!-- stampo il paragrafo censurato e la sua lunghezza -->
    <h3>Il seguente paragrafo conteneva una parola scomoda che è stata censurata ed è lungo <?php echo $censoredParagraphLength ?> caratteri:</h3>
    
    <p><?php echo $censoredParagraph ?></p>
</body>
</html>