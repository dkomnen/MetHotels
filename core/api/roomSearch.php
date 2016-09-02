<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/MetHotels/core/database/DataProvider.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/MetHotels/core/persistence/rooms.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/MetHotels/core/persistence/error.php";
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $pdo = DataProvider::getConnection();
    $sql = "SELECT * FROM rooms";
    $stmt = $pdo->prepare($sql);
    try {
        $stmt->execute();
    } catch (PDOException $e) {
        http_response_code(503);
        exit();
    }

    if ($stmt->rowCount() != 0) {
        $result = [];
        foreach ($stmt->fetchAll() as $value) {
            array_push($result, new Room($value['name'], $value['beds'], $value['roomArea'], $value['imageLocation'], $value['price'],$value['id']));
        }

        http_response_code(200);
        echo json_encode($result);
    }
}
?>