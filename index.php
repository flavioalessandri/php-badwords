<?php

// Creare una variabile con un paragrafo di testo. Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *.

// Get word to match with text
$word= ucwords($_GET["word"]);

//Text
$text = ucwords("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
$textLength = strlen($text);


echo "<h4> Text : '" .$text. " '</h4>";
echo "<h4> Text length : " .$textLength. "</h1>" ;

$wordpos = strpos($text,$word);

echo $wordpos;

if($wordpos>0){

  // replace finded word with ***
  $textReplaced = str_replace($word, "***",$text);

  //find text replaced Length
  $textReplacedLength = strlen($textReplaced);

  echo "<h4> Modified Text : " .$textReplaced. "</h1>" ;
  echo "<h4> Mofidied Text Length: " .$textReplacedLength. "</h1>" ;

} else{
  echo "<h4>No Word Finded for " .$word. "</h1>" ;
};

var_dump($word);
echo "<br>";
var_dump($text);
echo "<br>";
var_dump($textLength);
echo "<br>";
var_dump($textReplaced);
echo "<br>";
var_dump($textReplacedLength);

?>

<!-- <h4>Testo : <?php echo $text ?></h4>
<h3>Lunghezza testo : " <?php echo $textLength ?> "</h3>
<h4>Testo Modificato : " <?php echo $textReplaced ?> "</h4>
<h3>Lunghezza testo Modificato : " <?php echo $textReplacedLength ?> "</h3> -->
