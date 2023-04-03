<?php
// phpinfo();

echo "hola mundo con php 7.4";

echo "<a href='../api/'></a>";

echo "<br/>";

echo "<a href='../api/'></a>";

echo "<hr/>";

echo "hola mundo con php 8.2";





?>

<?php
/*código php... */

PRINT <<<HERE

/*dentro de este PRINT podremos picar código HTML, y será interpretado sin problema */

<a href="../api/"></a>

HERE;

?>

<?php header('X-PHP: test');
http_response_code($_GET['code'] ?? 200);

echo 'Test output';

var_dump(file_get_contents('php://input'));
var_dump($_GET);
var_dump($_POST);
var_dump($_SERVER);
var_dump($_ENV);
var_dump($_FILES);
var_dump(opcache_get_status());
 ?>


