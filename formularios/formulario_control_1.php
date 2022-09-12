<?php
    $dni = validar_dni($_POST["dni"]);

    function validar_dni($d) {
        $letra = substr($d, -1);
        $numero = (int)substr($d, 0, 8);

        $resto = $numero % 23;
        $letra = '';
        //echo $resto;

        switch($resto) {
            case 0:
                $letra = 'T';
                break;
            case 1:
                $letra = 'R';
                break;
            case 2:
                $letra = 'W';
                break;
            case 3:
                $letra = 'A';
                break;
            case 4:
                $letra = 'G';
                break;
            case 5:
                $letra = 'M';
                break;
            case 6:
                $letra = 'Y';
                break;
            case 7:
                $letra = 'F';
                break;
        }

        echo $numero . $letra;
    }
?>