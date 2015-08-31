<?php
$foo = "0";        // $foo est une chaîne de caractères (ASCII 48)
echo '$foo = "0";<br/>';
echo '$foo = ' . $foo . " type (" . gettype($foo) . ").<br/>";
$foo += 2;        // $foo est maintenant un entier (2)
echo '$foo += 2;<br/>';
echo '$foo = ' . $foo . " type (" . gettype($foo) . ").<br/>";
$foo = $foo + 1.3; // $foo est un nombre à virgule flottante (5.3)
echo '$foo + 1.3;<br/>';
echo '$foo = ' . $foo . " type (" . gettype($foo) . ").<br/>";
$foo = 5 + "3 petits cochons"; // $foo est un entier (8)
echo '$foo = 5 + "3 petits cochons";<br/>';
echo '$foo = ' . $foo . " type (" . gettype($foo) . ").<br/>";
?>