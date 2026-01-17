<?php

namespace app\Core;
use  app\services\ViewService;

abstract class Controller
{
    protected function view(string $view, array $data = [])
    {
        ViewService::instBlade();
        ViewService::render($view, $data);
    }
}
