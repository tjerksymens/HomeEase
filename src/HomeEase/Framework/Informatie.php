<?php

class Informatie
{
    //selecteer all informatie waar type = thuiszorg
    public static function getAllInformatieThuiszorg()
    {
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT * FROM Informatie WHERE type = 'thuiszorg' LIMIT 4");
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    // selecteer all informatie waar type = wat_moet_je_doen
    public static function getAllInformatieWatMoetJeDoen()
    {
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT * FROM Informatie WHERE type = 'wat_moet_je_doen' LIMIT 4");
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    // selecteer all informatie waar type = symptomen
    public static function getAllInformatieSymptomen()
    {
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT * FROM Informatie WHERE type = 'symptomen' LIMIT 4");
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}
