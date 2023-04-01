<?php

namespace App\Controllers;

use App\Models\Model_latihan1;

class Latihan1 extends BaseController
{
    public function index()
    {
        echo "Selamat Datang Fariz, selamat belajar Web Programming";
    }
    public function penjumlahan($n1, $n2)
    {
        $model = new Model_latihan1();
        $hasil = $model->jumlah($n1, $n2);
        echo "Hasil Penjumlahan dari ". $n1 ." + ". $n2 ." = " .$hasil;
    }
}
