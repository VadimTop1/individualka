<?php
namespace Controllers\ControllerP1;

class ControllerP1
{
    public function Show(array $param)
    {
        $titleNameWork =    "--> Индивидуальная работа";
        $titleTheme =       "--> Разработка облачного приложения, работающего с БД.";
        $titleTCondition =  "--> Разработать приложение, которое работает с базой данных, состоящей из одной таблицы<Br/>
                            с четырьмя полями (информацию, которая хранится в БД выбрать самостоятельно).<Br/> 
                            Интерфейс приложения должен содержать  две html-страницы.<Br/> 
                            Первая выводит содержимое БД в виде таблицы, вторая содержит форму, позволяющую<Br/>
                            ввести данные в таблицу.";
        $titleNameGroup = "Ученик группы ПИм-19";
        $resParam = explode("/", $param[0])[1];
        $Nameauthor = explode("_", $param[0]);
        $titleNameauthor = $Nameauthor[0] . " " . $Nameauthor[1] . " " . $Nameauthor[2];

        echo $titleNameWork."<br/>";
        echo $titleTheme."<br/>";
        echo $titleTCondition."<br/>";
        echo $titleNameGroup."<br/>";
        echo $titleNameauthor."<br/>";
    }
}

?>