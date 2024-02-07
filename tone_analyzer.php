<?php

function calculate_tone($content){

$options[CURLOPT_URL] = 'https://api.eu-gb.tone-analyzer.watson.cloud.ibm.com/instances/38545d48-70ca-4026-8283-5cd282dde1c5/v3/tone?version=2017-09-21';
$options[CURLOPT_USERPWD] = 'apikey:NKN5_uGP6CINRylDmbMli3UTYA9KfyUfDDBEalsyUfM3';
$options[CURLOPT_HTTPHEADER]= array(
                                            'Content-Type: text/html',
                                            'Connection: Keep-Alive'
                                            );
$options[CURLOPT_POST] = 1;
$options[CURLOPT_RETURNTRANSFER] = true;
 // curl_exec will not return true if you use this, it will instead return the request body
$options[CURLOPT_POSTFIELDS] =$content;
// Preset $response var to false and output
$fb = "";
$response = false;// don't quote booleans
//echo '<p class="response1">'.$response.'</p>';

$curl = curl_init();
curl_setopt_array($curl, $options);
// If curl request returns a value, I set it to the var here. 
// If the file isn't found (server offline), the try/catch fails and var should stay as false.
$fb = curl_exec($curl);


if($fb != false) {
   // echo '<p class="response2">'.$fb.'</p>';
    $response = $fb;
}

// If cURL was successful, $response should now be true, otherwise it will have stayed false.
return  json_encode($response);


}

?>