<?php
namespace Controllers\ControllerP1;

class ControllerP1
{
    static public function Main(string $_param)
    {
        self::TableInformation($_param);
        self::ControlPanel();
        //echo "Работает";
    }

    static public function ControlPanel()
    {
        $titleTable =  '<br/><br/>
        <table border="1">';
        echo $titleTable;
        echo '<tr><td><p><a href="https://individualkanext.herokuapp.com/page/addInfom">Меню добавления</a></p></td></tr>';
        echo '<tr><td><p><a href="https://individualkanext.herokuapp.com/page/showInfom">Вывод Информации</a></p></td></tr>';
        echo '<tr><td><p><a href="https://individualkanext.herokuapp.com/page/updateInfom">Очистить таблицу</a></p></td></tr>';
        echo '<tr><td><p><a href="https://individualkanext.herokuapp.com/page/">Главная</a></p></td></tr>';
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
        $resParam = explode("/", $param)[1];
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