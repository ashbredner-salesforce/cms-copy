<?php
$cms_icon = getenv('cms_icon');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $cms_icon);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.1 Safari/537.11');
$res = curl_exec($ch);
$rescode = curl_getinfo($ch, CURLINFO_HTTP_CODE); 
curl_close($ch) ;

header("Content-Type: image/png");
header("Content-Length: " . strlen($res));

echo $res;
?>