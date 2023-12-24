<?php
DEFINE("GENERAL", 21);
DEFINE("REDUCIDO", 10);
DEFINE("SUPERREDUCIDO", 4);

/**
 * Recibe un precio y un tipo de IVA y devuelve el precio tras
 * aplicar el IVA. 
 * 
 * @param float|int El precio sin el IVA aplicado
 * @param string    El tipo de IVA a aplicar
 * 
 * @return float    El precio tras aplicar el IVA
 */
function precioConIVA (float|int $precio, string $iva) : float {
    $precioConIVA = match($iva) {
        "GENERAL" => $precio + $precio * (GENERAL/100),
        "REDUCIDO" => $precio + $precio * (REDUCIDO/100),
        "SUPERREDUCIDO" => $precio + $precio * (SUPERREDUCIDO/100),
        "SIN IVA" => $precio
    };
    return $precioConIVA;
}
?>