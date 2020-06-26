<?php
        session_start();
        spl_autoload_register();
        $config = parse_ini_file('Config/db.ini');
        $pdo = new PDO($config['dsn'],$config['user'],$config['pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        $db = new \Database\PDODatabase($pdo);
        $view = new \Configs\View();
        $data_binder = new \Service\Data();

        $book_repository = new \Repository\BookRep($db);
        $book_service = new \Service\ListsService($book_repository);
        $user_repository = new \Repository\UserRep($db);
        $user_service = new \Service\UserService($user_repository);
        $book = new \Http\ListHttp($view, $book_service, $data_binder);
        $book->favorite($_GET);