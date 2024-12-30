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
    
    function handleGet($pdo) {
        $sql = "SELECT * FROM animes";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //print_r($result);
        echo json_encode($result);
        //echo json_encode(['message' => 'User created successfully']);
        echo json_last_error();
    }
    
    function handlePost($pdo, $input) {
        $sql = "INSERT INTO animes (titulo, nombre_estudio, anno_estreno, num_temporadas) VALUES (:titulo, :nombre_estudio, :anno_estreno, :num_temporadas)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'titulo' => $input['titulo'], 
            'nombre_estudio' => $input['nombre_estudio'], 
            'anno_estreno' => $input['anno_estreno'], 
            'num_temporadas' => $input['num_temporadas']
        ]);
        echo json_encode(['message' => 'Se ha creado el anime correctamente']);
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