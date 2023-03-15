<?php
  
use Carbon\Carbon;

function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	echo $hasil_rupiah;
 
}

function total($cekIn, $cekOut, $jumlah, $harga) {
    $awal = new Carbon($cekIn);
    $akhir = new Carbon($cekOut);
    $selisih = $awal -> diffInDays($akhir);
    $total = ($selisih  * $harga)* $jumlah;
    return $total;
}