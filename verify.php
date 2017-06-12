<?php
$access_token = 'br7TPh8c2j5ANWaUnR7a7CJqHPdE6hIyTh/ArxXw4OMOPuanJ+bF2bnP3AlHJrMZtQZ3Bmm3BbX0WcH31v4OZ8veejHP5YxZ3Z2PVJ+Tl1FqXvhe3y0J9079j/njIjrp6qikBPA8FZ838ZLtDOydtwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
