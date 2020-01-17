<?php

include "index.php";

echo '<table border="1">
   <caption>Таблица размеров обуви</caption>
   <tr>
    <th>Id</th>
    <th>Имя</th>
    <th>Фамилия</th>
    <th>Очество</th>
    <th>Возраст</th>
   </tr>
   ';

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

?>


   <tr><td>34,5</td><td>3,5</td><td>36</td><td>23</td><td>23</td></tr>
</table>