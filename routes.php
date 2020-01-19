<?php
    return [
        //'~^Page/(.*)$~' => [\Project\Controllers\MainController::class, 'sayHello'],
        '~^Page/(.*)$~' => [Controllers\ControllerP1::class, 'Show'],
        //'~^test$~' => 
        //'~^users/authorization~' => [\Project\Controllers\ControllerMain::class, 'distributeUrl'],
        //'~^(.*)$~' => [\Project\Controllers\ControllerMain::class, 'distributeUrl']
        //'~^authorization$~' => [\Project\Controllers\ControllerMain::class, 'distributeUrl']
    ];
?>