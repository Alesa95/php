<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random dog</title>
</head>
<body>
<?php
    $apiUrl = "https://dog.ceo/api/breeds/list/all";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $apiUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);

    $array = json_decode($response, TRUE); 
    $breeds = $array['message'];

    $breeds_normalized = [];

    foreach($breeds as $key => $value) {
        $subBreed = false;
        //echo "<p>Key: $key</p>";
        foreach($value as $subValue) {
            $subBreed = true;
            //echo "<p>Key: $key</p>";
            //echo "<p>Subvalue: $subValue</p>";
            $subBreed = $key . "/" . $subValue;
            //$subBreedA = $breed . "-" . $subBreed;
            array_push($breeds_normalized, $subBreed);
        }
        if(!$subBreed) {
            array_push($breeds_normalized, $key);
        }
    }
    //print_r($breeds_normalized);

?>
    <form action="" method="post">
        <select name="breed">
            <?php foreach($breeds_normalized as $breed) { ?>
                <option value="<?php echo $breed ?>"><?php echo $breed ?></option>
            <?php } ?>
        </select>
        <input type="submit" value="Buscar">
    </form>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $breed = $_POST["breed"];
        $apiUrl = "https://dog.ceo/api/breed/$breed/images/random";
        echo $apiUrl;

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $apiUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        //var_dump($response);
    
        $array = json_decode($response, TRUE); 
    
        $imagen = $array['message'];
    
    }
    ?>
    <img src="<?php echo $imagen ?>"> 
</body>
</html>