<?php
    /**
     * ESTO ES UN ENDPOINT DE UNA API. NO DEBE ABRIRSE DIRECTAMENTE DESDE EL 
     * NAVEGADOR
     * 
     * PARA INTERACTUAR CON ESTE FICHERO, ENVÍA MENSAJES HTTP DESDE UN 
     * PROGRAMA QUE PERMITA ENVIAR MENSAJES HTTP COMO POSTMAN
     */
    
    header("Content-Type: application/json");
    include 'conexion.php';
    
    $method = $_SERVER['REQUEST_METHOD'];
    $input = json_decode(file_get_contents('php://input'), true);
    
    switch ($method) {
        case 'GET':
            handleGet($conexion);
            break;
        case 'POST':
            handlePost($conexion, $input);
            break;
        case 'PUT':
            handlePut($conexion, $input);
            break;
        case 'DELETE':
            handleDelete($conexion, $input);
            break;
        default:
            echo json_encode(['message' => 'Invalid request method']);
            break;
    }
    
    /**
     * Devuelve todos los estudios de la base de datos en formato JSON
     */
    function handleGet($conexion) {
        $sql = "SELECT * FROM estudios";
        $sentencia = $conexion -> prepare($sql);
        $sentencia -> execute();
        $resultado = $sentencia -> fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($resultado);
    }
    
    /**
     * Inserta un nuevo estudio en la base de datos
     */
    function handlePost($pdo, $input) {
        $sql = "INSERT INTO estudios (nombre_estudio, ciudad, anno_fundacion) 
            VALUES (:nombre_estudio, :ciudad, :anno_fundacion)";
        $sentencia = $pdo->prepare($sql);
        $sentencia -> execute([
            'nombre_estudio' => $input['nombre_estudio'], 
            'ciudad' => $input['ciudad'], 
            'anno_fundacion' => $input['anno_fundacion']
        ]);
        echo json_encode(['mensaje' => 'Se ha creado el estudio correctamente']);
    }
    
    function handlePut($pdo, $input) {
        $sql = "UPDATE users SET name = :name, email = :email WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['name' => $input['name'], 'email' => $input['email'], 'id' => $input['id']]);
        echo json_encode(['message' => 'User updated successfully']);
    }
    
    function handleDelete($pdo, $input) {
        $sql = "DELETE FROM animes WHERE id_anime = :id_anime";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id_anime' => $input['id_anime']]);
        echo json_encode(['message' => 'Anime deleted successfully']);
    }
?>