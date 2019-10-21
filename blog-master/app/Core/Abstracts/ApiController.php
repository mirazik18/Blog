<?php

namespace Core\Abstracts;


use Core\Interfaces\ApiControllerInterface;
use Core\Interfaces\ControllerInterface;
use Models\Flashes;

abstract class ApiController implements ApiControllerInterface
{

    const CODE_START = 5000;

    public function render($datas, $code)
    {
        return json_encode([
            "code" => $code + self::CODE_START,
            "data" => $datas,
            "messages" => Flashes::get()
        ]);
    }
}