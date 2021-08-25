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

        // assegno a una variabile il valore del parametro get "censor"
        $censoredWord = $_GET['censor'];

        // rimpiazzo con tre asterischi la parola che l'utente ha passato per il parametro "censor"
        $paragraph = str_ireplace($censoredWord, '***', $paragraph);

        // assegno a una variabile il valore della lunghezza della stringa
        $paragraphLength = strlen($paragraph);

        if ($censoredWord != null) {
            $heading = "Il seguente paragrafo conteneva una parola scomoda che è stata censurata ed è lungo {$paragraphLength} caratteri:";
        } else {
            $heading = "Il seguente paragrafo è lungo {$paragraphLength} caratteri:";
        }

    ?>

    <!-- stampo il paragrafo e la sua lunghezza -->
    <h3><?php echo $heading ?></h3>
    
    <p><?php echo $paragraph ?></p>
</body>
</html>