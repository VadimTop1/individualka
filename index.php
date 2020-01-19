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

$route = $_GET['route'] ?? '';
$routes = require __DIR__ . '/routes.php';

foreach ($routes as $pattern => $controllerAndAction) {
    preg_match($pattern, $route, $matches);
}

echo "-> <br/>";
var_dump($matches);
echo "<br/>";
echo "<br/>-> <br/>";
var_dump($controllerAndAction);
echo "<br/>";
echo "<br/>";

if (count($matches) == 0 || ($matches[1] == "" || $matches[1] == null)) {
    echo 'Страница не найдена!';
    return;
}

$controllerName = $controllerAndAction[0];  //класс
$methodName = $controllerAndAction[1];      //метод
$controllerCreate = new $controllerName();
$controllerCreate->$methodName($matches); //(...matches)


$host="ec2-174-129-33-107.compute-1.amazonaws.com";
$dbname="d2vsnkphe5a3oj";
$user="rtokoowoircggm";
$password="7b7b20b8a7e3719a92a0f789626bfcd89b12e39de5e69bef5e706717a99eab24";

$obj_ControllerBD = new ControllerBD($host,$dbname,$user,$password);
$obj_Table1 = new Table1;

/*$obj_ControllerBD->CreteTable($obj_Table1);

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
if($obj_ControllerBD->AddDataTable($obj_Table1,$arrData) != false)
    echo "<br/>-> Успешно добавленно ";
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
    //Param::$obj_Table1 = $obj_Table1;
    echo "<br/><br/>";
    foreach($obj_Table1 as $value)
    {
        echo $value->get_firstName() . " ";
        echo $value->get_secondName() . " ";
        echo $value->get_age() . "<br/>";
    }
}

if($obj_ControllerBD->get_workConnection() != 0)
    $obj_ControllerBD->Disconnection();*/
?>