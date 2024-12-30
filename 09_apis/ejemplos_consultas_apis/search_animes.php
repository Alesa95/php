<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animes</title>
</head>
<body>
<form action="" method="post">
        Título: <input type="text" name="titulo">
        <input type="submit" name="Buscar">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $titulo = $_POST["titulo"];
        $titulo = preg_replace('/\s+/', '+', $titulo);
        $apiUrl = "https://api.jikan.moe/v4/anime?q=" . $titulo;

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $apiUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        //var_dump($response);
    
        $array = json_decode($response, TRUE); 

        $animes = $array['data'];

        //$titulo = $array['data'][0]['titles'][0]['title'];
        //$imagen = $array['data'][0]['images']['jpg']['image_url'];

        foreach($animes as $anime) { ?>
            <p><?php echo $anime['title'] ?></p>
            <img src="<?php echo $anime['images']['jpg']['image_url'] ?>">
        <?php }
    }
    ?>
</body>
</html>