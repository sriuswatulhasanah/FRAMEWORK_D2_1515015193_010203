<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pengguna;

class penggunaController extends Controller
{
    public function awal()
    {
    	return "Hello dari penggunaController";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
      $pengguna = new pengguna();
      $pengguna->username = 'sri isa';
      $pengguna->password = 'isa sri';
      $pengguna->save();
      return "data dengan username {$pengguna->username} telah disimpan";
    }
}
