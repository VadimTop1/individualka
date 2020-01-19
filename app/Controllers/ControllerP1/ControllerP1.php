<?php
namespace Controllers\ControllerP1;

class ControllerP1
{
    public function Show(array $param)
    {
        $res = explode("/", $param[0])[1];
        echo $res;
    }
}

?>