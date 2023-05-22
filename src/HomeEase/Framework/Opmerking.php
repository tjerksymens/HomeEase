<?php

class Opmerking
{
    private $date;
    private $opmerking;

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

    public function getOpmerking()
    {
        return $this->opmerking;
    }

    public function setOpmerking($opmerking)
    {
        if (empty($opmerking)) {
            throw new Exception("Opmerking mag niet leeg zijn");
        }
        $this->opmerking = $opmerking;
    }
    public static function getLatestOpmerkingen()
    {
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT * FROM Opmerkingen ORDER BY datum DESC LIMIT 3");
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public static function getAllOpmerkingen()
    {
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT * FROM Opmerkingen ORDER BY datum");
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function addOpmerking()
    {
        $conn = Db::getInstance();
        $statement = $conn->prepare("INSERT INTO Opmerkingen (datum, opmerking) VALUES (:datum, :opmerking)");
        $statement->bindValue(":datum", $this->getDate());
        $statement->bindValue(":opmerking", $this->getOpmerking());
        $result = $statement->execute();
        return $result;
    }
}
