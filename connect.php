<?php
    ini_set('display_errors', 1);
    define('DB_NAME', 'Facebook');
    define('DB_DSN', 'mysql:host=localhost;dbname=' . DB_NAME . ';charset=utf8');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DEBUG', true);

    function connect() : array
{
    $dbError = '';
    $pdo = null;

    $opt = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_EMULATE_PREPARES => false
    );
    try {
        $pdo = new PDO(DB_DSN, DB_USER, DB_PASSWORD, $opt);
    } catch (PDOException $e) {
        $dbError = 'Oups ! Connexion SGBD impossible !';
        if (DEBUG) :
            $dbError .= "<br/>" . $e->getMessage();
        endif;
    }
    return [$pdo, $dbError];
}


$_connect = connect();

$_dbError = $_connect[1];
$pdo =  $_connect[0];

$_connect = null;
#stop the application
if ($_dbError) {
    die(
        '<div class="ui red inverted segment"> <p>'
          . $_dbError
        . '</p></div></body></html>'
    );
}
?>