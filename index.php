<?php

    session_start();
    spl_autoload_register();
    $config = parse_ini_file('Config/db.ini');
    $pdo = new PDO($config['dsn'],$config['user'],$config['pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $db = new \Database\PDODatabase($pdo);
    $view = new \Configs\View();
    $data_binder = new \Service\Data();
    $homepage = new \Http\HomeHttp($view);
    $homepage -> index();