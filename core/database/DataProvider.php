<?php

require_once $_SERVER["DOCUMENT_ROOT"] . '/MetHotels/core/util/Logger.php';

/**
 * Class providing the PDO data connection object.
 */
class DataProvider {

    private static $connectionString = "mysql:host=127.0.0.1;dbname=met_hotels;";
    private static $user = "root";
    private static $pwd = "";

    /**
     * Method for connecting to the database via PDO object. This method throws
     * a PDOException in case of failure to connec to the database.
     * @return \PDO Data connection object.
     */
    public static function getConnection() {
        try {
            $pdo = new PDO(DataProvider::$connectionString, DataProvider::$user, DataProvider::$pwd);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            Logger::log($ex->getMessage(), $ex->getLine(), $ex->getFile());
            throw $ex;
        }
        return $pdo;
    }

}