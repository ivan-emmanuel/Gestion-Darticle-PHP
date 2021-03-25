<?php
$config = [
    "database" => [
        "type" => 'mysql',
        "mysql" => [
            'db_driver' => 'mysql',
            'db_host' => 'localhost',
            'db_port' => 3306,
            'db_name' => 'contacts',
            'db_user' => 'root',
            'db_password' => '',
        ],
    ]
];

define('APP_NAME', "GESTION DE CONTACTS PHP  ");
define('DB_DRIVER', $config['database']['type']);
define('DB_HOST', $config['database'][DB_DRIVER]['db_host']);
define('DB_NAME', $config['database'][DB_DRIVER]['db_name']);
define('DB_USER', $config['database'][DB_DRIVER]['db_user']);
define('DB_PASSWORD', $config['database'][DB_DRIVER]['db_password']);
define('DB_PORT', 3306);
define('DS', DIRECTORY_SEPARATOR);
define('APP_BASE_DIR', dirname(__DIR__));
define('APP_INCLUDES_DIR', dirname(__DIR__) . DS."app".DS."views".DS."includes");
define('APP_UPLOADS_DIR', dirname(__DIR__) . DS .DS."uploads");
define('MAX_UPLOAD_FILE_SIZE', ini_get("upload_max_filesize"));

