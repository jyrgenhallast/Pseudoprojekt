<?php
print "Tere maailm"."<br>";

$eesnimi = "Jurgen";
$perekonnanimi = "Hallast";
print "$eesnimi $perekonnanimi"."<br>";
$vanus = 32;
print "$eesnimi $perekonnanimi ($vanus)"."<br>";
$eesnimi_algab_vokaaliga=false;
//$isik = array(
  //  "eesnimi" => $eesnimi,+
    //"perekonnanimi"=> $perekonnanimi,
    //"vanus"=>$vanus,
//);
//print "$isik[eesnimi] $isik[perekonnanimi] ($isik[vanus])"."<br>";
class isik {
    var $eesnimi = "Jurgen";
    var $perekonnanimi = "Hallast";
    var $vanus = 32;
    var $sugu = "mees";
}
$isikObj = new isik;
print "$isikObj->eesnimi $isikObj->perekonnanimi ($isikObj->vanus) $isikObj->sugu";

if ($eesnimi_algab_vokaaliga){
    print "Eesnimi algab vokaaliga"."<br>";
}
$nimiSplit = str_split($eesnimi, 1);
$first = $nimiSplit[0];
if ($first[0]=="A" || $first[0]=="E" || $first[0]=="I" || $first[0]=="O" || $first[0]=="U" || $first[0]=="Õ" || $first[0]=="Ä" || $first[0]=="Ö" || $first[0]=="Ü" ||
    $first[0]=="a" || $first[0]=="e" || $first[0]=="i" || $first[0]=="o" || $first[0]=="u" || $first[0]=="õ" || $first[0]=="ä" || $first[0]=="ö" || $first[0]=="ü") {
    print "<br>"."Nimi algab vokaaliga"."<br>";
};

$num1= 1.23;
$num2= 2.34;
$sum= floatval($num1+$num2);
print "<br>".$sum. "<br>";
