<?php
class Model_latihan1 extends CI_Model
{
    //membuat variabel untuk menampung nilai
    public $nilai1, $nilai2, $nilai3, $hasil;

    //method penjumlahan
    public function jumlah($n1 = null, $n2 = null, $n3 = null,)
    {
    $this->nilai1 = $n1;
    $this->nilai2 = $n2;
    $this->nilai3 = $n3;
    $this->hasil = $this->nilai1 + $this->nilai2 +$this->nilai3;
    return $this->hasil;
    }
}
