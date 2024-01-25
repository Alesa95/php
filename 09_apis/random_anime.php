<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animes</title>
</head>
<body>
    <?php
    $apiUrl = "https://api.jikan.moe/v4/random/anime";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $apiUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);
    //var_dump($response);

    $array = json_decode($response, TRUE); 
    print_r($array['data']['titles'][0]['title']);

    $imagen = $array['data']['images']['jpg']['image_url'];
    ?>
    <img src="<?php echo $imagen ?>"> 
</body>
</html>