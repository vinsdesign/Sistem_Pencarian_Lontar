<?php

class DashboardAdmin extends Controller
{
    public function index()
    {
        $this->view('templates/admin/Header');
        $this->view('components/admin/DashboardAdmin');
        $this->view('templates/admin/Footer');
    }
}
