<?php
        session_start();
        session_unset();
        session_destroy();

        spl_autoload_register();
        $config = parse_ini_file('Config/db.ini');
        $pdo = new PDO($config['dsn'],$config['user'],$config['pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        $db = new \Database\PDODatabase($pdo);
        $view = new \Configs\View();
        $data_binder = new \Service\Data();

        $user_repository = new \Repository\UserRep($db);
        $user_service = new \Service\UserService($user_repository);
        $user = new \http\UserHttp($user_service, $view, $data_binder);
        $user->logout($_POST);