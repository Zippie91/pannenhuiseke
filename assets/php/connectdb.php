<?php
$config = parse_ini_file("config.ini");

$charset = "utf8";

$dsn = "mysql:host=$config[hostname];dbname=$config[dbname];charset=$charset";
$options = [
    PDO::ATTR_ERRMODE           => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES  => false
];


try {
    $dbh = new PDO($dsn, $config[user], $config[password], $options);
}
catch (PDOException $e) {
    echo $e->getMessage();
}
?>