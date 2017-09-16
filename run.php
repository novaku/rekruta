<?php
/**
 * Created by PhpStorm.
 * User: Nova Herdi Kusumah
 * Date: 9/16/2017
 * Time: 10:26 AM
 */
include 'mainClass.php';

$input = MainClass::getInput();

switch ($input['soal']) {
    case '1' :
        echo MainClass::soal_1($input['input']) . PHP_EOL;
        break;
    case '2' :
        echo MainClass::soal_2($input['input']) . PHP_EOL;
        break;
    case '3' :
        break;
}