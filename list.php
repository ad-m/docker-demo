<?php

$pdo_connection = new PDO('mysql:host='.$_ENV['MYSQL_HOST']. ';dbname='.$_ENV["MYSQL_DATABASE"], $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD']);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Dokumentacja</title>
</head>

<body>
<?php
$result = $pdo_connection->query("SELECT VERSION()");
if ($result !== false) {
    foreach ($result as $row) {
        echo '<pre>';
        var_dump($row);
        echo '</pre>';
    }
} else {
    echo 'The SQL query failed with error:';
    var_dump($pdo_connection->errorInfo());
}
?>
</body>

</html>