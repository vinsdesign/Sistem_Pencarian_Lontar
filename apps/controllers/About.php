<?php

class About
{
    public function index($nama = 'kelvin', $pekerjaan = 'pelajar')
    {
        echo "Hallo, saya $nama, saya seoarang $pekerjaan";
    }
    public function page()
    {
        echo 'About/Page';
    }
}
