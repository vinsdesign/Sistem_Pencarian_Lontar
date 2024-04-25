<?php

class DataAdmin extends Controller
{
    public function index()
    {
        $this->view('templates/admin/Header');
        $this->view('components/admin/SideBar');
        $this->view('components/admin/TableViewAdmin');
        $this->view('templates/admin/Footer');
    }
    public function detail()
    {
        $this->view('templates/admin/Header');
        $this->view('components/admin/SideBar');
        $this->view('components/admin/DetailDataAdmin');
        $this->view('templates/admin/Footer');
    }
}
