<?php 
// The request also includes the userip parameter which provides the end
// user's IP address. Doing so will help distinguish this legitimate
// server-side traffic from traffic which doesn't come from an end-user.
//$url = "https://173.194.42.5/search&q=outillage";
$url = "https://www.google.fr/?gfe_rd=cr&ei=uexsVomvLpPu8wf47IWoBA&gws_rd=ssl#q=test";
curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_REFERER, '127.0.0.1');
    $body = curl_exec($ch);
//    var_dump(filter_var('http://example.com', FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED));
//$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//var_dump($url, $http_code);die;
    curl_close($ch);


// now, process the JSON string
$json = json_decode($body);
// now have some fun with the results..

var_dump($json);
