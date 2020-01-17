<?php
    include "index.php";
    
    echo "<br/>".$_POST['firstName']." ". $_POST['secondName'] . " " . $_POST['thirdName']. " " . $_POST['age'];
/*
    if( isset( $_POST['firstName']) && isset($_POST['secondName']) && isset($_POST['thirdName']) && isset($_POST['age']))
    {
        $arrData = [
            "'".$_POST['firstName']."'",
            "'".$_POST['secondName']."'",
            "'".$_POST['thirdName']."'",
            "'".$_POST['age']."'"
        ];
        echo "<br/>".$arrData[0]." ". $arrData[1] . " " . $arrData[2]. " " . $arrData[3];
        if($obj_ControllerBD->AddDataTable($obj_Table1,$arrData) != false)
            echo "<br/>-> Успешно добавленно ";
        else
            echo "<br/><br/>-> Не удалось добавить ";
    }
    else
    {   
        echo "Введенные данные некорректны";
    }*/
?>