<?php

namespace App\Components;

use Symfony\UX\TwigComponent\ComponentInterface;

class AlertComponent implements ComponentInterface
{
    public string $type = 'success';
    public string $message;



    public static function getComponentName(): string
    {
        return 'alert';
    }
}
