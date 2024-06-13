<?php
  $bottoken= "6028959265:AAHF-9XNzFrlNOri_a-V5eFBjcBLMfmgg5U";
  $chatids = array("-4237915511");

  define('BOT_TOKEN', $bottoken);
  define('API_URL', 'https://api.telegram.org/bot'.BOT_TOKEN.'/');

  function enviar_telegram($enviar, $chat_id){
    $queryArray = [
      'chat_id' => $chat_id,
      'text' => $enviar,
    ];
    $url = API_URL.'sendMessage?'. http_build_query($queryArray)."&parse_mode=html";
    $result = file_get_contents($url);
  }

  foreach($chatids as $chat_id){
    enviar_telegram($enviar, $chat_id);
  }
?>

