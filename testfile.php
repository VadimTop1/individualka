<?php
    # Если кнопка нажата
    if( isset( $_POST['nazvanie_knopki'] ) )
    {
        # Тут пишете код, который нужно выполнить.
        # Пример:
        echo 'Кнопка нажата!';
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

    <input type="submit" name="nazvanie_knopki" value="Нажмите" />
</form>