<?php
//Создание коректного пути к классу
function FragmentationPath($path):string
{
    $arrFolder = explode("\\", $path);
    $className = "app";//__DIR__;//"app/";
    foreach($arrFolder as $value)
        $className .= "/" . $value;

    return $className .= ".php";
}
//Авто загрузка классов
spl_autoload_register(function ($name) 
{
    $className = FragmentationPath($name);
    //echo "<br/>Хочу загрузить: ".$className."<br/>";
    require_once $className;
});

use WorkWithBD\ClassBD\Table1\Table1;
use WorkWithBD\ControllerBD\ControllerBD;

echo "-> Индивидуальная работа <br/>";

$host="ec2-174-129-33-107.compute-1.amazonaws.com";
$dbname="d2vsnkphe5a3oj";
$user="rtokoowoircggm";
$password="7b7b20b8a7e3719a92a0f789626bfcd89b12e39de5e69bef5e706717a99eab24";

$obj_ControllerBD = new ControllerBD($host,$dbname,$user,$password);
$obj_Table1 = new Table1;

$obj_ControllerBD->CreteTable($obj_Table1);

$arrData = [
    "'Волковский'",
    "'Вадим'",
    "'Сергеевич'",
    21
];
$arrData2 = [
    "'Белкин'",
    "'Дмитрий'",
    "'Монитор'",
    23
];
 //var_dump($obj_Table1);
if($obj_ControllerBD->AddDataTable($obj_Table1,$arrData) != false)
    echo "<br/><br/>-> Успешно добавленно ";
else
    echo "<br/><br/>-> Не удалось добавить ";

if($obj_ControllerBD->AddDataTable($obj_Table1,$arrData2) != false)
    echo "<br/><br/>-> Успешно добавленно ";
else
    echo "<br/><br/>-> Не удалось добавить ";

if($obj_ControllerBD->OutPutDataTable($obj_Table1) == false)
    echo "<br/><br/>-> Не удалось вывисти данные ";
else
{
    echo "<br/>";
    foreach($obj_Table1 as $value)
    {
        echo $value->get_firstName() . " ";
        echo $value->get_secondName() . " ";
        echo $value->get_age() . "<br/>";
    }
}

if($obj_ControllerBD->get_workConnection() != 0)
    $obj_ControllerBD->Disconnection();
//use src\test1\test1 as mainTest;
//use WorkWithBD\ConnectBD\ConnectBD as ConnectDataBase;

//echo "Start4 <br/>  ----- <br/>";

//$obj3 = new mainTest;
//echo $obj3->hello();
//echo "<br/>";


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