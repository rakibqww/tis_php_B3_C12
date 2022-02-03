<?php

require_once 'vendor/autoload.php';
use App\classes\Calculator;

//echo '<pre>';
//print_r($_POST) ;

if (isset($_POST['operator'])){
    $calculator = new Calculator($_POST);
//$calculator->index();
    $result     = $calculator->index();
    include 'index.php';
}else{
    header('Location: index.php');
}

