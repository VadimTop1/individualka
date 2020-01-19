<?php
namespace Controllers\ControllerP1;

use WorkWithBD\ClassBD\Table1\Table1;
use WorkWithBD\ControllerBD\ControllerBD;

class ControllerP1
{
    static public function Main(array $_param)
    {
        self::TableInformation($_param);
        self::ControlPanel();
        //echo "Работает";
    }

    static public function ControlPanel()
    {
        $host="ec2-174-129-33-107.compute-1.amazonaws.com";
        $dbname="d2vsnkphe5a3oj";
        $user="rtokoowoircggm";
        $password="7b7b20b8a7e3719a92a0f789626bfcd89b12e39de5e69bef5e706717a99eab24";

        $obj_ControllerBD = new ControllerBD($host,$dbname,$user,$password);
        $obj_Table1 = new Table1;

        $titleTable =  '<br/><br/>
        <table border="1">';
        echo $titleTable;
        echo '<tr><td>'."</td><td>"."</td></tr>";
        echo '<tr><td>'."</td><td>"."</td></tr>";
        echo '</table>';
    }

    static public function TableInformation(string $param)
    {
        $titleTable =  '<br/><br/>
        <table border="1">';
        $titleNameWork =    "Индивидуальная работа";
        $titleTheme =       "Разработка облачного приложения, работающего с БД.";
        $titleTCondition =  "Разработать приложение, которое работает с базой данных, состоящей из одной таблицы<Br/>
                            с четырьмя полями (информацию, которая хранится в БД выбрать самостоятельно).<Br/> 
                            Интерфейс приложения должен содержать  две html-страницы.<Br/> 
                            Первая выводит содержимое БД в виде таблицы, вторая содержит форму, позволяющую<Br/>
                            ввести данные в таблицу.";
        $titleNameGroup =   "Ученик группы ПИм-19";
        $resParam = explode("/", $param[0])[1];
        $Nameauthor = explode("_", $resParam);
        $titleNameauthor =  $Nameauthor[0] . " " . $Nameauthor[1] . " " . $Nameauthor[2];

        echo $titleTable;
        echo '<tr><td>'.$titleNameWork      ."</td></tr>";
        echo '<tr><td>'.$titleTheme         ."</td></tr>";
        echo '<tr><td>'.$titleTCondition    ."</td></tr>";
        echo '<tr><td>'.$titleNameGroup     ."</td></tr>";
        echo '<tr><td>'.$titleNameauthor    ."</td></tr>";
        echo '</table>';
    }
}

?>