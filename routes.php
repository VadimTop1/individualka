<?php
    use Controllers\ControllerP1\ControllerP1;
    use Controllers\ControlerOutput\ControlerOutput;

    return [
        //'~^page/(.*)$~' => [ControllerP1::class, 'Main'],
        '~^page/Волковский_Вадим_Сергеевич$~' => [ControllerP1::class, 'Main'],
        '~^page/showInfom1$~' => [ControlerOutput::class, 'Add'],
        '~^page/showInfom2$~' => [ControlerOutput::class, 'Show']
    ];
?>