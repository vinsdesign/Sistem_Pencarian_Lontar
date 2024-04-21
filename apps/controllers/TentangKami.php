<?php

class TentangKami extends Controller
{
    public function index()
    {
        $this->view('templates/user/Header');
        $this->view('components/user/Navbar');
        $this->view('components/user/SearchComponent');
        $this->view('components/user/CarouselImage');
        $this->view('components/user/TentangKami');
        $this->view('components/user/FooterComponent');
        $this->view('templates/user/Footer');
    }
}
