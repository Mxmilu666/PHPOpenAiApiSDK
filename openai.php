<?php
function openai($APIkey,$model,$prompt,$max_tokens) {
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL,'https://gpt.5k.work/v1/completions');
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS,json_encode(array(
        'model' => $model,
        'prompt' => $prompt,
        'max_tokens' => $max_tokens,
        'temperature' => 1,
        'top_p' => 1,
        'n' => 1,
        'presence_penalty' => 0.6,
        'frequency_penalty' => 0,
        'stream' => false,
        'logprobs' => null,
        'stop' => '\n'
      )));
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_HTTPHEADER,array(
        'Content-Type: application/json; charset=utf-8',
        'Authorization: Bearer '.$APIkey,
));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$res = curl_exec($curl);
curl_close($curl);
return $res;
}

function openaichat($APIkey,$model,$role,$message,$max_tokens) {
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL,'https://gpt.5k.work/v1/chat/completions');
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_POST, 1);
$result = array();
array_push($result, array(
            'role' => $role,
            'content' => $message,
            ));
curl_setopt($curl, CURLOPT_POSTFIELDS,json_encode(array(
        'model' => $model,
        'messages' => $result,
        'max_tokens' => $max_tokens,
        'temperature' => 0.5,
        'top_p' => 1,
        'n' => 1,
        'stream' => false,
        'stop' => '\n'
      )));
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_HTTPHEADER,array(
        'Content-Type: application/json; charset=utf-8',
        'Authorization: Bearer '.$APIkey,
));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$res = curl_exec($curl);
curl_close($curl);
return $res;
}
?>