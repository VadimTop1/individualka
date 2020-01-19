<?php
    use Controllers\ControllerP1\ControllerP1;
    return [
        //'~^Page/(.*)$~' => [\Project\Controllers\MainController::class, 'sayHello'],
        //'~^page/(.*)$~' => [Controllers\ControllerP1::class, 'Show'],
        '~^page/(.*)$~' => [ControllerP1::class, 'Main'],
        '~^page/addInfom$~' => [ControllerP1::class, 'Show'],
        '~^page/showInfom$~' => [ControllerP1::class, 'Show']
        //'~^test$~' => 
        //'~^users/authorization~' => [\Project\Controllers\ControllerMain::class, 'distributeUrl'],
        //'~^(.*)$~' => [\Project\Controllers\ControllerMain::class, 'distributeUrl']
        //'~^authorization$~' => [\Project\Controllers\ControllerMain::class, 'distributeUrl']
    ];
?>