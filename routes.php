<?php
    use Controllers\ControllerP1\ControllerP1;
    use Controllers\ControlerOutput\ControlerOutput;

    return [
        //'~^Page/(.*)$~' => [\Project\Controllers\MainController::class, 'sayHello'],
        //'~^page/(.*)$~' => [Controllers\ControllerP1::class, 'Show'],
        '~^page/(.*)$~' => [ControllerP1::class, 'Main'],
        '~^page/addInfom$~' => [ControlerOutput::class, 'Add'],
        '~^page/showInfom$~' => [ControlerOutput::class, 'Show']
        //'~^test$~' => 
        //'~^users/authorization~' => [\Project\Controllers\ControllerMain::class, 'distributeUrl'],
        //'~^(.*)$~' => [\Project\Controllers\ControllerMain::class, 'distributeUrl']
        //'~^authorization$~' => [\Project\Controllers\ControllerMain::class, 'distributeUrl']
    ];
?>