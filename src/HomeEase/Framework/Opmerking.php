<?php

class Opmerking
{
    private static $opmerking;

    public static function getAllOpmerkingen()
    {
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT * FROM Opmerkingen ORDER BY datum DESC LIMIT 3");
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}
