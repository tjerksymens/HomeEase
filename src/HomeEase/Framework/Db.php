<?php

class Db
{
    private static $db;

    public static function getInstance()
    {
        if (self::$db !== null) {
            return self::$db;
        } else {
            self::$db = new PDO('mysql:host=ID393251_HomeEase.db.webhosting.be;dbname=ID393251_HomeEase', "ID393251_HomeEase", "TiboIsGeil69");
            return self::$db;
        }
    }
}
