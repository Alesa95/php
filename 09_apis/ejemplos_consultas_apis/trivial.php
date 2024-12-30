<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trivial!</title>
</head>
<body>
    <form action="" method="post">
        Amount: <input type="text" name="amount"><br><br>
        <input type="submit" value="Generate!">
    </form>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $amount = $_POST["amount"];
        $amount = "amount=$amount";
        $apiUrl = "https://opentdb.com/api.php?$amount";
    
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $apiUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        //var_dump($response);
    
        $array = json_decode($response, TRUE);
        
        $questions = $array['results'];

        foreach($questions as $question) { ?>
            <h1><?php echo $question['question'] ?></h1>
            <p>Correcta: <?php echo $question['correct_answer'] ?></p>
            <?php foreach($question['incorrect_answers'] as $incorrect_ansquer) { ?>
                <p>Incorrecta: <?php echo $incorrect_ansquer ?></p>
            <?php }
        }
    }
    ?>
    <img src="<?php echo $imagen ?>"> 
</body>
</html>