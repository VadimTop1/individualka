<?php
//Авто загрузка классов
/*spl_autoload_register(
    function (string $className)
    {
        //echo __DIR__ . '\\'. $className . '.php';
        //echo "<br/><br/>".__DIR__ . "<br/>";
        var_dump(__DIR__ . '/src/' . $className . '.php');
        //require_once __DIR__ . '/src/' . $className . '.php';
    }
);*/
spl_autoload_register(function ($name) {
    echo "Хочу загрузить $name.\n";
    throw new Exception("Невозможно загрузить $name.");
});

require_once 'app/src/test1/test1.php';
require_once 'app/src/test2/test2.php';
//require_once "App/test2Fold/test1/test1.php";
//require_once "App/test/test1/test1.php";

use src\test1\test1 as mainTest;
use src\test2\test2;

//include 'connect.php';
//namespace App\test2Fold\test1;

echo "Start4 <br/>  ----- <br/>";

$obj3 = new mainTest;
echo $obj3->hello();

echo "<br/>";
echo "<br/>";

try {
    $obj2 = new test2;
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}

echo "<br/>";
echo "<br/>";

$obj = new test2;
echo $obj->hello();



//$query = "INSERT INTO customers (FirstName ,LastName ,Email ,Age  ) VALUES ('Дима','Монитор', 'dim@mail.ru', 21);";
//$result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());
// Выполнение SQL-запроса
//$query = 'SELECT * FROM customers';
//$result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());

// Вывод результатов в HTML
/*echo "<table>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

//Очистка результата
pg_free_result($result);

//Закрытие соединения
pg_close($dbconn);*/

// Соединение, выбор базы данных
//$pgsql_conn = pg_connect("host=ec2-174-129-33-107.compute-1.amazonaws.com dbname=d2vsnkphe5a3oj user=rtokoowoircggm password=7b7b20b8a7e3719a92a0f789626bfcd89b12e39de5e69bef5e706717a99eab24")
//    or die('Не удалось соединиться: ' . pg_last_error());
//
//if ($pgsql_conn) {
//    echo "Успешно подключились к : " . pg_host($pgsql_conn) . "<br/>\n";
//    $query = "show databases like 'db_name' ";
//    $result = pg_query($query) or die("Нету таблицы");//die('Ошибка запроса: ' . pg_last_error());
//    if($result != null)
//        echo "Таблица существует";
//    else
//        echo "Нету таблицы";
//    pg_close($dbconn);
//    
//} else {
//    echo "Bad connect :(";
//    print pg_last_error($pgsql_conn);
//    exit;
//}
// Выполнение SQL-запроса
//$query = 'SELECT * FROM authors';
//$result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());

// Вывод результатов в HTML
//echo "<table>\n";
//while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
//    echo "\t<tr>\n";
//    foreach ($line as $col_value) {
//        echo "\t\t<td>$col_value</td>\n";
//    }
//    echo "\t</tr>\n";
//}
//echo "</table>\n";

// Очистка результата
//pg_free_result($result);

//Закрытие соединения
//pg_close($dbconn);
?>