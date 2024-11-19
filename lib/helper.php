<?php
function dbConnect()
{
    $dsn = "mysql:host=" . $_ENV['DB_HOST'] . ";dbname=" . $_ENV['DB_NAME'] . ";charset=" . $_ENV['DB_CHAR'];

    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $pdo = new PDO($dsn, $_ENV['DB_USER'], $_ENV['DB_PASS'], $options);
    return $pdo;
}

/**
    (var_)dump variable(s)
    No params, just get vars from func_get_args function
 */
function dd()
{
    $args = func_get_args();

    if (count($args)) {
        echo "<pre>";

        foreach ($args as $arg) {
            print_r($arg);
        }

        echo "</pre>";

        die();
    }
}

function getPage()
{
    $page = isset($_GET["page"]) ? $_GET["page"] : '';
    if ($page == '') {
        return '../resources/views/home.view.php';
    }

    if (file_exists('../resources/views/' . $page . ".view.php")) {
        return '../resources/views/' . $page . ".view.php";
    }

    die('404 : page not found');
}