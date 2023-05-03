<?php

class Herinnering
{
    private static $herinnering;

    public static function getAllHerinneringen()
    {
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT * FROM Herinneringen ORDER BY datum LIMIT 3");
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}
