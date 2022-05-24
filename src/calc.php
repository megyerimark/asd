<?php

echo file_get_contents('templates/head.html');
// echo file_get_contents('templates/calc.html');
// echo file_get_contents('templates/foot.html');



$page=file_get_contents('templates/calc.html');

$aside = $_GET['aside'];
$bside = $_GET['bside'];
$cside = $_GET['cside'];
$dside = $_GET['dside'];

function calcArea($aside,$bside,$cside, $dside)
{
    $s=($aside+$bside+$cside+$dside)/2;
    $area=sqrt(
    ($s-$aside)*
    ($s-$bside)*
    ($s-$cside)*
    ($s-$dside)
    );
    return $area;

}
// if(isset($_GET['submit'])){
//     $errors=array();
//     $true=true;
//     if(empty($_GET['aside'])){
//         $true=false;
//         array_push($errors,"A oldal üres!");
//     }
//     if(empty($_GET['bside'])){
//         $true=false;
//         array_push($errors,"A oldal üres!");
//     }
//     if(empty($_GET['cside'])){
//         $true=false;
//         array_push($errors,"A oldal üres!");
//     }
//     if(empty($_GET['dside'])){
//         $true=false;
//         array_push($errors,"A oldal üres!");
//     }
// }

// $area= calcArea($aside,$bside,$cside, $dside);

if(!empty($_GET['aside'])and
!empty($_GET['bside'])and
!empty($_GET['cside'])and
!empty($_GET['dside']))
{
    $aside = $_GET['aside'];
    $bside = $_GET['bside'];
    $cside = $_GET['cside'];
    $dside = $_GET['dside'];
    $area= calcArea($aside,$bside,$cside, $dside);

}else{
    $area="Üres beviteli mező";
}



$page=str_replace('{{result}}', $area, $page);

echo $page;






?>

