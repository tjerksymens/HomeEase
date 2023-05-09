<?php

class Taken
{
    // get al taken te_doen
    public static function getAllTakenTeDoen()
    {
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT * FROM Taken WHERE status = 'te_doen'");
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    //get al taken in_behandeling
    public static function getAllTakenInBehandeling()
    {
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT * FROM Taken WHERE status = 'in_behandeling'");
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    //get al taken gedaan
    public static function getAllTakenGedaan()
    {
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT * FROM Taken WHERE status = 'gedaan'");
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}
