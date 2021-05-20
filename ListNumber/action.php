<?php
use NumberPhone\NumberPhone;
include_once "../vendor/autoload.php";
$listNumberString = $_REQUEST['numberPhone'];
$listNumberPhone = explode(",", $listNumberString);

const VIETTEL = "/^086|^09[6-8]|^03[2-9]/";
const MOBIFONE = "/^070|^089|^07[6-9]|^090|^093/";
const VINAPHONE = "/^094|^091|^08[1-5]|^088/";
const PHONE = "/\d{10,10}/";

$numberList = new NumberPhone();


for ($i = 0; $i < count($listNumberPhone); $i++) {
    if (preg_match(VIETTEL, $listNumberPhone[$i]) && preg_match(PHONE, $listNumberPhone[$i])) {

        $numberList->addViettel($listNumberPhone[$i]);

    } else if (preg_match(MOBIFONE, $listNumberPhone[$i]) && preg_match(PHONE, $listNumberPhone[$i])) {

        $numberList->addMobifone($listNumberPhone[$i]);

    } else if (preg_match(VINAPHONE, $listNumberPhone[$i]) && preg_match(PHONE, $listNumberPhone[$i])) {

        $numberList->addVinaphone($listNumberPhone[$i]);
    }
}

$viettel = $numberList->getViettel();
$vinaphone = $numberList->getVinaphone();
$mobifone = $numberList->getMobifone();

echo "Viettel: ".implode(",",$viettel);
echo "<br>";
echo "Vinaphone: ".implode(",",$vinaphone);
echo "<br>";
echo "Mobifone: ".implode(",",$mobifone);
echo "<br>";
