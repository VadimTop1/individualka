<?php

include "index.php";


if($obj_ControllerBD->OutPutDataTable($obj_Table1) == false)
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
    foreach($obj_Table1 as $value)
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
?>