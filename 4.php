<?php

//Конструкция or die()  ||
//||


//($a = fopen("file.txt", "rt")) or die("Ошибка!");

//$a = fopen("file.txt", "rt") || die("Ошибка!");
//
//
$a = (fopen("file.txt", "rt") || die("Ошибка!"));

?>
