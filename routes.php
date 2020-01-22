<?php
    use Controllers\ControllerP1\ControllerP1;
    use Controllers\ControlerOutput\ControlerOutput;

    return [
        //'~^page/(.*)$~' => [ControllerP1::class, 'Main'],
        '~^page/reg$~' => [ControllerP1::class, 'Main'],
        '~^page/log$~' => [ControllerP1::class, 'Main']
    ];
?>