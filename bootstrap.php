<?php
spl_autoload_register(function ($class) {
    include_once(__DIR__ . "/src/HomeEase/Framework/" . $class . ".php");
});
session_start();
