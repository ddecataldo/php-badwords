<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    
    <?php

        if(isset($_GET["parola"])){
            $parolaUtente = $_GET["parola"];
        }
        $testoCensurato;


        // Dichiato una variabile con del testo
        $testo = "Questo è il mio primo paragrafo dichiarato in una variale php";
        // Rimuovo gli spazi dalla variabile
        $testoSenzaSpazi = trim($testo);
        // Conto la lunghezza della stringa
        $lunghezzaTesto = strlen($testoSenzaSpazi);

        if(isset($parolaUtente)){
            $testoCensurato = str_replace($parolaUtente, "***" , $testo);
            $lunghezzaTesto = strlen($testoCensurato);
        } else {
            $testoCensurato = $testo;
        }

    ?>

    <!-- Stampo a schermo il testo e la sua lunghezza -->
    <p><strong>Testo:</strong> <?php echo $testoCensurato ?></p>
    <p><strong>Lunghezza Testo:</strong> <?php echo $lunghezzaTesto ?></p>

</body>
</html>