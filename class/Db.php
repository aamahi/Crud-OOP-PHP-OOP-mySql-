<?php

class Db
{
    public function database()
    {
        $servername = "localhost";
        $username = "root";
        $password = "new-password";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=employe", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
