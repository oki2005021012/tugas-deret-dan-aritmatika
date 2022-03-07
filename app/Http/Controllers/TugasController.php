<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index()
    {
        $angka_0 = 2;
        $angka_1 = 5;
        $jumlah = 10;
        $deret = [$angka_0, $angka_1];

        for ($i = 1; $i <= 10; $i++) {
            $deret[$i + 1] = $deret[$i - 1] + $deret[$i];
        }
        return view('tugasweb1', compact('deret'));
    }

    public function tugas()
    {
        $angka1 = 3;
        $angka2 = 7;
        $jumlah = 10;
        $deret = [$angka1, $angka2];
        $selisih = $angka2 - $angka1;
        for ($i = 1; $i <= 9; $i++) {
            $deret[$i + 1] = $deret[$i] + $selisih;
        }
        return view('tugasweb2', compact('selisih', 'deret'));
    }
}
