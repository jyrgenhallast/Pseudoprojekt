<?php
print "Tere maailm"."<br>";

$eesnimi = "Jurgen";
$perekonnanimi = "Hallast";
print "$eesnimi $perekonnanimi"."<br>";
$vanus = 32;
print "$eesnimi $perekonnanimi ($vanus)"."<br>";
$eesnimi_algab_vokaaliga=false;
$isik = array(
    "eesnimi" => $eesnimi,
    "perekonnanimi"=> $perekonnanimi,
    "vanus"=>$vanus,
);
print "$isik[eesnimi] $isik[perekonnanimi] ($isik[vanus])"."<br>";

if ($eesnimi_algab_vokaaliga){
    print "Eesnimi algab vokaaliga"."<br>";
}