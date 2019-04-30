<?php


function lookuppostcode($postcode)
{
    $postcode = str_replace(" ", "", $postcode);
    $key = 'YOUR API CODE';
    $request = 'https://api.getAddress.io/v2/uk/' . $postcode . '?api-key=' . $key;
    $response = file_get_contents($request);
    $jsonresponse = json_decode($response, true);
    $returnData = array();
    $returnData['lat'] = $jsonresponse['Latitude'];
    $returnData['lon'] = $jsonresponse['Longitude'];
    $returnData['totalAddresses'] = count($jsonresponse['Addresses']);
    $addressArray = explode(',', $jsonresponse['Addresses'][0]);
    $returnData['locality'] = $addressArray[4];
    $returnData['city'] = $addressArray[5];
    $returnData['county'] = $addressArray[6];

    $returnData['addresses'] = array();

    foreach ($jsonresponse['Addresses'] as $address) {
        $addressArray = explode(',', $address);
        $fullAddress = '';

        foreach ($addressArray as $item) {
            
                $fullAddress .= $item . ",";
            
        }
        $fullAddress = trim($fullAddress, ",");
        $returnData['addresses'][] = array(
            'line1' => $addressArray[0],
            'line2' => $addressArray[1],
            'line3' => $addressArray[2],
            'line4' => $addressArray[3],
            'locality' => $addressArray[4],
            'city' => $addressArray[5],
            'county' => $addressArray[6],
            'fullAddress' => $fullAddress,
        );
    }
    return $returnData;
}
?>




