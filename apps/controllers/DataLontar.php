<?php

class DataLontar extends Controller
{
    public function index()
    {
        $this->view('templates/admin/Header');
        $this->view('components/admin/SideBar');
        $this->view('components/admin/TableViewLontar');
        $this->view('templates/admin/Footer');
    }
    public function detail()
    {
        $this->view('templates/admin/Header');
        $this->view('components/admin/SideBar');
        $this->view('components/admin/DetailDataLontar');
        $this->view('templates/admin/Footer');
    }
}
