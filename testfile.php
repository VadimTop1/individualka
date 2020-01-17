<?php

include "index.php";

if( isset( $_POST['nazvanie_knopki'] ) && isset($_POST["firstName"] ) && isset($_POST["secondName"] ) && isset($_POST["thirdName"] ) && isset($_POST["age"] ) )
{
    $arrData = [
        "'".$_POST['firstName']."'",
        "'".$_POST['secondName']."'",
        "'".$_POST['thirdName']."'",
        $_POST['age']
    ];
    //echo $arrData[0]." ". $arrData[1] . " " . $arrData[2]. " " . $arrData[3];
    if($obj_ControllerBD->AddDataTable($obj_Table1,$arrData) != false)
        echo "<br/>-> Успешно добавленно ";
    else
        echo "<br/><br/>-> Не удалось добавить ";
}
?>

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