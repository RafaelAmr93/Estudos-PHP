<?php

$text = 'a text';
$textQuote = "$text with double quotes";
//string com aspas simples não aceitam variáveis
$otherText = '$textQuote and...';

echo $text . '<br />';
echo $textQuote . '<br />';
echo $otherText . '<br />';

echo $textQuote[10] . '<br />';
echo $textQuote[-3] . '<br />';

//Heredoc - String com múltiplas linhas, " " e variáveis
$heredoc = <<<TEXT
<h1>Line 1 $text</h1>
Line 2 $textQuote
Line 3 <br />

TEXT;

echo nl2br($heredoc);
//nl2br — Insere quebras de linha HTML antes de todas newlines em uma string

//Nowdoc - String com múltiplas linhas, ' ' e SEM variáveis
$nowdoc = <<<TEXT
<p>Line 1 $text</p>
Line 2 $textQuote
Line 3 
TEXT;

echo nl2br($nowdoc);

?>