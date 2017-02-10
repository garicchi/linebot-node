<?php

$result=file_get_contents('php://input');
$json = json_decode($result,true);
$replyToken = $json['events'][0]['replyToken'];

$url = 'https://api.line.me/v2/bot/message/reply';
$token = 'SKSxCyXL9uftL9JCDNj/byldiD8OQdgsfVgSHYgWN6ZgBRvF8I7k7BwsDHv2JbOotGS/smbWy3pK3+GCbQTcAmyAfhz7gfg+Yx3AaPbk34TL38oPdLBrqZTke8KsGxDHrWqvv4Z+GOeSWfWniRJH4wdB04t89/1O/w1cDnyilFU=';
$data = array(
    'replyToken' => $replyToken,
    'messages' => array(
        array(
        'type'=>'text',
        'text'=>'hoge'
        )
    ),
);
$headers = array(
    'Content-Type: application/json',
    'Authorization: Bearer '.$token,
);
$options = array('http' => array(
    'method' => 'POST',
    'content' => json_encode($data),
    'header' => implode("\r\n", $headers),
));

echo $option;

$contents = file_get_contents($url, false, stream_context_create($options));

?>