<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasa</title>
</head>
<body>
<?php
    $apiUrl = "https://api.nasa.gov/planetary/apod";
    $apiKey = "bSEYgUXACA85Mc98VQ6B5hSGP7JAwtxRWTcbEN0h";

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

    $imagen = $array['url'];
    ?>
    <img src="<?php echo $imagen ?>">
</body>
</html>