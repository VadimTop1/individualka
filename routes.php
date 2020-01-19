<?php
    use Controllers\ControllerP1\ControllerP1;
    use Controllers\ControlerOutput\ControlerOutput;

    return [
        //'~^page/(.*)$~' => [ControllerP1::class, 'Main'],
        '~^page/Волковский_Вадим_Сергеевич$~' => [ControllerP1::class, 'Main'],
        '~^page/Дмитрий_Белкин_Геннадьиевич$~' => [ControllerP1::class, 'Main'],
        '~^page/Максим_Висягин_Александрович$~' => [ControllerP1::class, 'Main'],
        '~^page/addInfom$~' => [ControlerOutput::class, 'Add'],
        '~^page/showInfom$~' => [ControlerOutput::class, 'Show'],
        '~^page/updateInfom$~' => [ControlerOutput::class, 'Update']
    ];
?>