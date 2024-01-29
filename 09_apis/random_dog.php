<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random dog</title>
</head>
<body>
<?php
    $apiUrl = "https://dog.ceo/api/breeds/image/random";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $apiUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);
    //var_dump($response);

    $array = json_decode($response, TRUE); 

    $imagen = $array['message'];
    ?>
    <img src="<?php echo $imagen ?>"> 
</body>
</html>