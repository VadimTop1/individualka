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



$route = $_GET['route'] ?? '';
$routes = require __DIR__ . '/routes.php';

foreach ($routes as $pattern => $controllerAndAction) {
    preg_match($pattern, $route, $matches);
    if(count($matches) != 0)
        break;
}

if (count($matches) == 0) {
    echo 'Страница не найдена!';

    $titleTable =  '<br/><br/>
    <table border="1">
    <caption>Страницы студентов</caption>';
    echo $titleTable;
    echo '<tr><td><p><a href="https://individualkanext.herokuapp.com/page/Волковский_Вадим_Сергеевич">Волковский Вадим Сергеевич</a></p></td></tr>';
    echo '<tr><td><p><a href="https://individualkanext.herokuapp.com/page/Дмитрий_Белкин_Геннадьиевич">Дмитрий Белкин Геннадьиевич</a></p></td></tr>';
    echo '<tr><td><p><a href="https://individualkanext.herokuapp.com/page/Максим_Висягин_Александрович">Максим Висягин Александрович</a></p></td></tr>';
    echo '</table>';

    return;
}

$controllerName = $controllerAndAction[0];  //класс
$methodName = $controllerAndAction[1];      //метод
//$controllerCreate = new $controllerName();
//$controllerCreate::$methodName($matches); //(...matches)
if($methodName == 'Main')
{
    echo $matches[0];
    //$controllerName::$methodName($matches[0]);
}else
    $controllerName::$methodName();


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