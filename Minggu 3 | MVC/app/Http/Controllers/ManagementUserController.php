<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index()
    {
        $nama = "Mochammad Indra Maulidana";
        $pelajaran = ["Pemrograman Web", "Kalkulus", "Workshop Mobile"];

        return view('home', [
            "nama" => $nama,
            "pelajaran" => $pelajaran,
        ]);
        // Return view home dengan mengirimkan data dengan berupa array
    }
}
