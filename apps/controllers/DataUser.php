<?php

class DataUser extends Controller
{
    public function index()
    {
        $this->view('templates/admin/Header');
        $this->view('components/admin/SideBar');
        $this->view('components/admin/TableViewUser');
        $this->view('templates/admin/Footer');
    }
}
