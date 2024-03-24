<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lat1Controller extends Controller
{
    public function index(){
        $data["nama"]="Rizki";
        $data["asal"]="Merak";
        return view('v_latihan1', $data);
    }

    public function method2(){
        $data['title'] = 'Daftar Mahasiswa';
        $data['daf_mhs'] = array(
            array("nama" => "Rizki", "asal" => "Jauh"),
            array("nama" => "Rian", "asal" => "Pinus"),
            array("nama" => "Uby", "asal" => "Jekardah")
        );
        return view('v_latihan2', $data);
    }
}
