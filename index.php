<?php

require_once "classes/File.php";
require_once "classes/File_Put_C.php";
require_once "classes/File_write.php";
require_once "classes/Files.php";
$file = new File(__DIR__ . "/text.txt");

$file = new File_Put_C(__DIR__ . "/file.txt");

$item = new File_write(__DIR__ . "/list.txt");

$files = new Files(__DIR__ . "/files.txt");
//$items = new Files(__DIR__ . "/files.txt");
$files->writeToFiles("В лесу родилась елочка,");
$files->writeToFiles("в лесу она росла!");
