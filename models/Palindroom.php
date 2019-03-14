<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Hier komen alle functies die te maken hebben met een palindroom
// palindroom = woord omdraaien

function revertWord($tekst){
    $revertTekst = "";
    
    //We gebruiken for omdat we de rangeomvang kennen.
    
    for ($index = strlen($tekst) -1 ; $index > -1  ; $index --){
        echo $tekst[$index]."<br/>";
    $revertTekst = $revertTekst . $tekst[$index];
    }
    
    return $revertTekst;
}