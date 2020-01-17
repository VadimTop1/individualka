<?php
    echo "<br/>->".$_POST['firstName']." ". $_POST['secondName'] . " " . $_POST['thirdName']. " " . $_POST['age'];
?>

<form action="" method="POST">
    <p><b>Ваше Имя:</b><br>
    <input type="firstName" size="30">
    <p><b>Ваше Фамилия:</b><br>
    <input type="secondName" size="30">
    <p><b>Ваше Очество:</b><br>
    <input type="thirdName" size="30">
    <p><b>Сколько лет:</b><br>
    <input type="age" size="3">
    <br/><br/>
    <input type="submit" value="Нажмите" />
</form>