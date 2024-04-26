<?php

class Login extends Controller
{
    public function index()
    {
        $this->view('templates/admin/Header');
        $this->view('components/admin/LoginComponent');
        $this->view('templates/admin/Footer');
    }
}
