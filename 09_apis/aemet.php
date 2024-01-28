<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aemet
    </title>
</head>
<body>
<?php
    $apiKey = "eyJzdWIiOiJhbGVqYW5kcmFfc2FudGlhZ29fOTVAaG90bWFpbC5jb20iLCJqdGkiOiJhMGZhZTFjNy00YjlhLTQ1NGMtOWY0Mi1mNGE1OTllOTljZjciLCJpc3MiOiJBRU1FVCIsImlhdCI6MTcwNjQ3OTQwNCwidXNlcklkIjoiYTBmYWUxYzctNGI5YS00NTRjLTlmNDItZjRhNTk5ZTk5Y2Y3Iiwicm9sZSI6IiJ9.0WMM_EhBqOMsg4jN5MFwmBrtW3ZORBTGGXAuGviijgM";
    $apiUrl = "https://opendata.aemet.es/opendata/api/prediccion/especifica/municipio/diaria/29901";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $apiUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_USERPWD, $apiKey . ":");  
    $response = curl_exec($curl);
    curl_close($curl);
    //var_dump($response);

    $array = json_decode($response, TRUE); 
    //print_r($array['data']['titles'][0]['title']);
    var_dump($array);
    //$imagen = $array['data']['images']['jpg']['image_url'];
    ?>

</body>
</html>