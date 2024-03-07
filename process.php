<?php
/*Descrizione:

Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi. Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare
*/

$paragrafo = $_POST["paragrafo"];
$parola = $_POST["parola"];

echo "Paragrafo: " . $paragrafo . "<br>";
echo "Lunghezza: " . strlen($paragrafo) . "<br>";

$paragrafo_censurato = str_replace($parola, "***", $paragrafo);

echo "Paragrafo censurato: " . $paragrafo_censurato . "<br>";
echo "Lunghezza: " . strlen($paragrafo_censurato) . "<br>";


?>