<?php

include "index.php";

//use WorkWithBD\ClassBD\Table1\Table1;
//use WorkWithBD\ControllerBD\ControllerBD;
//use src\Param\Param;

/*$host="ec2-174-129-33-107.compute-1.amazonaws.com";
$dbname="d2vsnkphe5a3oj";
$user="rtokoowoircggm";
$password="7b7b20b8a7e3719a92a0f789626bfcd89b12e39de5e69bef5e706717a99eab24";

$obj_ControllerBD = new ControllerBD($host,$dbname,$user,$password);*/

if( isset( $_POST['nazvanie_knopki'] ) )
    {
        /*$obj_Table1 = new Table1;

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
        }*/
    }
?>

<form method="POST">
    <p><b>Ваше Имя:</b><br>
    <input type="text" size="30">
    <p><b>Ваше Фамилия:</b><br>
    <input type="text" size="30">
    <p><b>Ваше Очество:</b><br>
    <input type="text" size="30">
    <p><b>Сколько лет:</b><br>
    <input type="text" size="3">
    <br/><br/>
    <input type="submit" name="nazvanie_knopki" value="Нажмите" />
</form>