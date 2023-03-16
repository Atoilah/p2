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
function malam($cekIn, $cekOut, $harga) {
    $awal = new Carbon($cekIn);
    $akhir = new Carbon($cekOut);
    $selisih = $awal -> diffInDays($akhir);
    $total = $selisih  * $harga;
    return $total;
}
function hari($cekIn, $cekOut) {
    $awal = new Carbon($cekIn);
    $akhir = new Carbon($cekOut);
    $selisih = $awal -> diffInDays($akhir);
    return $selisih;
}

function totalHarga($jumlah, $harga){
    $total = $jumlah * $harga;
    return $total;
}
