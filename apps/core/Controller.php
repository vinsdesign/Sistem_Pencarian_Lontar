<?php

class Controller
{
    public function view($view, $data = [])
    {
        require_once './apps/views/' . $view . '.php';
    }
}
