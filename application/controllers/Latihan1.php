<?php

class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "<center><h1>Ilmu Komputer</h1>
        Halo Nama saya Mohamad Rizky Hidayat,";
        echo " Saya kuliah jurusan ilmu komputer.";
        echo " Sekarang sudah semester 4 dan ini adalah mata kuliah Web Programming 2";
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model("Model_latihan1"); // Sesuaikan dengan yang ada di models
        $data["nilai1"] = $n1;
        $data["nilai2"] = $n2;
        
        $data["hasil"] = $this->Model_latihan1->jumlah($n1, $n2); 
        // Sesuaikan dengan Models yang dimasukan diatas

        // $nilai1 = $n1;
        // $nilai2 = $n2;
        // $hasil = $this->Model_latihan1->jumlah($n1, $n2);
        // echo "Hasil Penjumlahan dari ". $n1." + ". $n2." = ". $hasil;
        $this->load->view('view_latihan1', $data);
    }
}

?>