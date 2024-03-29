<?php

return [
    'database' => [
        'name' => 'biblioteca',
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=localhost',
        'opciones' => [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_PERSISTENT => true
        ]
    ],
    'mail'=>[
        'smtp_server'=>'smtp.gmail.com',
        'smtp_port'=>'587',
        'smtp_security'=>'tls',
        'username'=>'Carmen',
        'email'=>'carmenorla03@gmail.com',
        'pass'=>'yccfuzpnqgfxmvug',
    ],
    'routes'=>[
        'filename'=> 'routes.php'
    ],
    'pdf' =>[
        'pdf_creator' => 'PDF_CREATOR',
        'author' => 'Carmen',
        'title' => 'Devolucion libro',
        'paginas'=>1,
        'font'=>'helvetica',
        'size_font'=>'12',
        'logo'=>'./public/images/book-fill.svg',
        'imagen'=>'./public/images/libro1.jpg'

    ]

];
