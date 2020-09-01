<?php

// Creare una variabile con un paragrafo di testo. Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *.

$word= $_GET["word"];

$text = "ciao cavallo cane mucca asino mucca gallina pollo mucca";

$textLength = strlen($text);

$textReplaced = str_replace(ucwords($word), "***", ucwords($text));

$textReplacedLength = strlen($textReplaced);

var_dump($text);
echo "<br>";
var_dump($textLength);
echo "<br>";
var_dump($textReplaced);
echo "<br>";
var_dump($textReplacedLength);

?>

<h2>Testo : <?php echo $text ?></h2>
<h3>Lunghezza testo : " <?php echo $textLength ?> "</h3>
<h2>Testo Modificato : " <?php echo $textReplaced ?> "</h2>
<h3>Lunghezza testo Modificato : " <?php echo $textReplacedLength ?> "</h3>
