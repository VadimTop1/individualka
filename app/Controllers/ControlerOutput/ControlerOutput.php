<?php
namespace Controllers\ControlerOutput;

use WorkWithBD\ClassBD\Table1\Table1;
use WorkWithBD\ControllerBD\ControllerBD;
use Controllers\ControllerP1\ControllerP1;

class ControlerOutput
{
    static private $obj_ControllerBD;
    static private $obj_Table1;

    static public function Connect()
    {
        $host="ec2-174-129-33-107.compute-1.amazonaws.com";
        $dbname="d2vsnkphe5a3oj";
        $user="rtokoowoircggm";
        $password="7b7b20b8a7e3719a92a0f789626bfcd89b12e39de5e69bef5e706717a99eab24";

        self::$obj_ControllerBD = new ControllerBD($host,$dbname,$user,$password);
        self::$obj_Table1 = new Table1;
    }

    static public function Add()
    {
        ControlerOutput::Connect();

        echo '
        <form method="POST">
            <p><b>Ваше Имя:</b><br>
            <input type="text" name="firstName" size="30">
            <p><b>Ваше Фамилия:</b><br>
            <input type="text" name="secondName" size="30">
            <p><b>Ваше Очество:</b><br>
            <input type="text" name="thirdName" size="30">
            <p><b>Сколько лет:</b><br>
            <input type="text" name="age" size="3">
            <br/><br/>
            <input type="submit" value="Нажмите" />
        </form>
        ';

        if(self::$obj_ControllerBD == null)
            return ;

        if(isset($_POST['firstName'] ) && isset($_POST['secondName'] ) 
        && isset($_POST['thirdName'] ) && isset($_POST['age'] ) )
        {
            $arrData = [
                "'".$_POST['firstName']."'",
                "'".$_POST['secondName']."'",
                "'".$_POST['thirdName']."'",
                $_POST['age']
            ];
            echo $arrData[0]." ". $arrData[1] . " " . $arrData[2]. " " . $arrData[3];

            if(self::$obj_ControllerBD->AddDataTable(self::$obj_Table1,$arrData) != false)
                echo "<br/>-> Успешно добавленно ";
            else
                echo "<br/><br/>-> Не удалось добавить ";
        }

        ControllerP1::ControlPanel();
    }
    static public function Update()
    {
        ControlerOutput::Connect();
        self::$obj_ControllerBD->CreteTable(self::$obj_Table1);
        
        echo "Таблица была очищена!";
        ControllerP1::ControlPanel();
    }
    static public function Show()
    {
        ControlerOutput::Connect();
        if(self::$obj_ControllerBD->OutPutDataTable(self::$obj_Table1) == false)
            echo "<br/><br/>-> Не удалось вывисти данные ";
        else
        {
            echo '<br/><br/>
                <table border="1">
                    <caption>Таблица размеров обуви</caption>
                    <tr>
                        <th>Id</th>
                        <th>Имя</th>
                        <th>Фамилия</th>
                        <th>Очество</th>
                        <th>Возраст</th>
                    </tr>
                    ';
            foreach(self::$obj_Table1 as $value)
            {
                echo '<tr>';//<td>34,5</td><td>3,5</td><td>36</td><td>23</td><td>23</td></tr>
                echo '<td>'.$value->get_id().'</td>';
                echo '<td>'.$value->get_firstName().'</td>';
                echo '<td>'.$value->get_secondName().'</td>';
                echo '<td>'.$value->get_thirdName().'</td>';
                echo '<td>'.$value->get_age().'</td>';
                echo '</tr>';
            }
            echo '</table>';
        }
        ControllerP1::ControlPanel();
        
    }
}
?>