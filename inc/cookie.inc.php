<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$visitCounter = 0;
$cVisitCounter = filter_input(INPUT_COOKIE, 'visitCounter');
if($cVisitCounter){
    $visitCounter = $cVisitCounter;
}
$visitCounter++;
setcookie('visitCounter', $visitCounter , time() +3600*60*24);
$lastVisit  = "";
$clastVisit = filter_input(INPUT_COOKIE, 'lastVisit');
if($clastVisit){
    $lastVisit = $clastVisit;
}
if(date('d-m-Y', $_COOKIE['lastVisit']) != date('d-m-Y')){
setcookie( "lastVisit",$lastVisit,date("d-m-Y H:i:s"));
setcookie( "lastVisit", date("d-m-Y H:i:s"));}

