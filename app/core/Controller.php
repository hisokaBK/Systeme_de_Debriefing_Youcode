<?php

namespace app\Core;

class Controller
{
    protected function view(string $view, array $data = [])
    {
        require __DIR__ . '/../../resources/views/pages/' . $view . '.php';
    }
}
