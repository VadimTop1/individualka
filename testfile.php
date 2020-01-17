<?php
    include "index.php";
    if( isset( $_POST['nazvanie_knopki'] ) )
    {
        
        echo 'Данные отправлены!';

        if($obj_ControllerBD->OutPutDataTable($obj_Table1) == false)
            echo "<br/><br/>-> Не удалось вывисти данные ";
        else
        {
            echo "<br/><br/>";
            foreach($obj_Table1 as $value)
            {
                echo $value->get_firstName() . " ";
                echo $value->get_secondName() . " ";
                echo $value->get_age() . "<br/>";
            }
        }
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