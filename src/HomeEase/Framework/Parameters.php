<?php

class Parameters
{
    //get latest parameters
    public static function getLatestParameters()
    {
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT * FROM Parameters ORDER BY id DESC LIMIT 1");
        $statement->execute();
        $data = $statement->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
}
