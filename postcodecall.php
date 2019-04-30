<?php
include 'postcode_api_test.php';

if (isset($_GET["postcode"]) && $_GET["postcode"] != "") {

    $postcode = $_GET["postcode"];
    $data = lookuppostcode($postcode);
    $fulladdress = array();
    foreach ($data['addresses'] as $address) {
        $fulladdress[] = $address['fullAddress'];
    }

    $jsondata = json_encode($fulladdress);
    echo $jsondata;

}
