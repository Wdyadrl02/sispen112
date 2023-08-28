<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deskripsi;
use App\Models\edukasi;
use App\Models\Pertanyaan;
use Illuminate\Support\Facades\DB;
class DeskripsiController extends Controller
{
    function index(){
        $data['list_jenis'] = edukasi::all();
        $data['list_deskripsi'] = Deskripsi::all();
        return view('deskripsiEdukasi.index',$data);
    }
    function create(){
        $deskripsi = new Deskripsi;
        $deskripsi->id_jenis_edukasi = request('jenis');
        $deskripsi->nama_edukasi = request('nama');
        $deskripsi->keterangan = request('keterangan');
        $deskripsi->save();
        return back();
    }
    function detail($id){
        $data['deskripsi'] = Deskripsi::find($id);
        return view('deskripsiEdukasi.detail',$data);
    }
    function addPertanyaan(){
        $pertanyaan = new Pertanyaan;
        $pertanyaan->id_deskripsi = request('id_deskripsi');
        $pertanyaan->id_jenis_edukasi = request('id_edukasi');
        $pertanyaan->pertanyaan = request('pertanyaan');
        $pertanyaan->solusi = request('solusi');
        $pertanyaan->save();
        return back();
    }

}
