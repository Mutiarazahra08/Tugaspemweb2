<?php

function kelulusan($nilai_akhir)
{
    if($nilai_akhir > 75)
    {
        return 'LULUS';
    } 
    elseif($nilai_akhir < 80)
    {
        return 'TIDAK LULUS';
    }
    else
    {
        return 'TIDAK VALID';
    }
}

function grade($nilai_akhir)
{
    if ($nilai_akhir <= 100) {
        return 'A';
    } elseif($nilai_akhir <= 85) {
        return 'B';
    } elseif($nilai_akhir <= 70) {
        return 'C';
    } elseif($nilai_akhir <= 82) {
        return 'B';
    } elseif($nilai_akhir <= 40) {
        return 'D';
    }else{
        return 'TIDAK VALID';
    }
}




?>