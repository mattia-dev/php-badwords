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

    ?>

    <!-- stampo la stringa e la sua lunghezza -->
    <h3>Il seguente paragrafo è lungo <?php echo $paragraphLength ?> caratteri:</h3>
    
    <p><?php echo $paragraph ?></p>
</body>
</html>