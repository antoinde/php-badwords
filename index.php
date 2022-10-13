<?php
/*
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, 
dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
*/

$paragraph = "I politici e i pannolini devono essere cambiati spesso, e per la stessa ragione.";

// acquisisci da URL parola da censurare
$censuredWord = $_GET['word'];
echo 'word to censure: ' . $censuredWord;



?>

<div>
    <h1 style="font-size: 4rem;">TESTO DA VISUALIZZARE:</h1>

    <p style="background-color: grey; padding: 20px; font-weight: 900;">
        <?php
        echo $paragraph;
        ?>
    </p>
    <p style="background-color: green; padding: 20px;">
        <?php
        echo 'Lunghezza della stringa: ' . strlen($paragraph);
        ?>
    </p>

    <!-- sostituisci parola salvata in censuredWord dentro paragrafo -->
    <p style="background-color: brown; padding: 20px;">
        <?php
        $newParagraph = str_replace($censuredWord, '***', $paragraph);
        echo $newParagraph;
        ?>
        <p>
            <?= 'Censured paragraph length: ' . strlen($newParagraph); ?>
        </p>

    </p>

</div>