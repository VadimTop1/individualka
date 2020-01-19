<?php
    use Controllers\ControllerP1\ControllerP1;
    return [
        //'~^Page/(.*)$~' => [\Project\Controllers\MainController::class, 'sayHello'],
        //'~^page/(.*)$~' => [Controllers\ControllerP1::class, 'Show'],
        '~^page/ВолковскийВадимСергеевич$~' => [ControllerP1::class, 'Show'],
        //'~^test$~' => 
        //'~^users/authorization~' => [\Project\Controllers\ControllerMain::class, 'distributeUrl'],
        //'~^(.*)$~' => [\Project\Controllers\ControllerMain::class, 'distributeUrl']
        //'~^authorization$~' => [\Project\Controllers\ControllerMain::class, 'distributeUrl']
    ];
?>