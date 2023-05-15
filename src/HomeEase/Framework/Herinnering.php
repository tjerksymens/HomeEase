<?php

class Herinnering
{
    private $date;
    private $herinnering;

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        if (empty($date)) {
            throw new Exception("Datum mag niet leeg zijn");
        }
        $this->date = $date;
    }

    public function getHerinnering()
    {
        return $this->herinnering;
    }

    public function setHerinnering($herinnering)
    {
        if (empty($herinnering)) {
            throw new Exception("Herinnering mag niet leeg zijn");
        }
        $this->herinnering = $herinnering;
    }

    public static function getAllHerinneringen()
    {
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT * FROM Herinneringen ORDER BY datum LIMIT 3");
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function addHerinnering()
    {
        $conn = Db::getInstance();
        $statement = $conn->prepare("INSERT INTO Herinneringen (datum, herinnering) VALUES (:datum, :herinnering)");
        $statement->bindValue(":datum", $this->getDate());
        $statement->bindValue(":herinnering", $this->getHerinnering());
        $result = $statement->execute();
        return $result;
    }
}
