<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\edukasi;
use App\Models\Deskripsi;
use App\Models\Pertanyaan;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class edukasiController extends Controller
{
    function index(){
        $data['list_edukasi'] = edukasi::all();
         return view('admin.edukasi.index',$data);
    }
    // function index(){
    //     $data['list_edukasi'] = edukasi::all();
    //     return view('edukasi.index',$data);
    // }
    function create(Request $req){
        $random = Str::random(20);
        $edukasi = new edukasi;
        $edukasi->nama = request('nama');
        $edukasi->deskripsi = request('deskripsi');
        $edukasi->pertanyaan = request('pertanyaan');
        $edukasi->sub_edukasi = request('sub');
        $edukasi->no_layanan = request('no');
        $edukasi->foto = "";
        $edukasi->save();

        $filename = $random.'.'.$req->file('file')->getClientOriginalExtension();
                $req->file('file')->move(public_path('../../imageEdukasi'),$filename);
                
                $edukasi->foto = $filename;
                $edukasi->save();
        return back()->with('create','berhasil');
    }
    function update($id){
        $edukasi = edukasi::find($id);
        $edukasi->nama = request('nama');
        $edukasi->deskripsi = request('deskripsi');
        $edukasi->no_layanan = request('no');
        $edukasi->save();
        return back()->with('update','berhasil');
    }
    function hapus($id){
        deskripsi::where('id_jenis_edukasi',$id)->delete();
        Pertanyaan::where('id_jenis_edukasi',$id)->delete();
         Pertanyaan::where('id_deskripsi',$id)->delete();
        edukasi::destroy($id);
        return back()->with('delete','berhasil');
    }

    //subedukasi

    function deskripsi($id){
        $data['edukasi'] = edukasi::find($id);
        $data['list_deskripsi'] = Deskripsi::where('id_jenis_edukasi',$id)->get();
        return view('admin.edukasi.deskripsi',$data);

    }
    function addDeskripsi(){
        $deskripsi = new Deskripsi;
        $deskripsi->id_jenis_edukasi = request('jenis');
        $deskripsi->nama_edukasi = request('nama');
        $deskripsi->keterangan = request('keterangan');
        $deskripsi->save();
        return back()->with('create','berhasil');;
    }
    function deskripsiEdit($id){
        $deskripsi = Deskripsi::find($id);
        $deskripsi->nama_edukasi = request('nama');
        $deskripsi->keterangan = request('keterangan');
        $deskripsi->save();
        return back()->with('update','berhasil');;
    }
    function deskripsiDetail($id){
        $des = $data['deskripsi'] = Deskripsi::find($id);
        $data['list_gejala'] = Pertanyaan::where('id_deskripsi',$des->id)->get();
        return view('admin.edukasi.detailSub',$data);
    }
    function deskripsiHapus($id){
        Pertanyaan::where('id_deskripsi',$id)->delete();
        Deskripsi::destroy($id);

        return back()->with('delete','berhasil');;
    }
    function DesPenanganan($id){
        $deskripsi = Deskripsi::find($id);
        $deskripsi->penanganan = request('penanganan');
        $deskripsi->save();
        return back();
    }

    //pertanyaan

    function pertanyaan($id){
        $deskripsi = $data['deskripsi'] = Deskripsi::find($id);
        $data['list_pertanyaan'] = Pertanyaan::where('id_deskripsi',$id)->get();

        return view('admin.edukasi.pertanyaan',$data);
    }
    function addPertanyaan(){
        $pertanyaan = new Pertanyaan;
        $pertanyaan->id_deskripsi = request('id_deskripsi');
        $pertanyaan->id_jenis_edukasi = request('id_edukasi');
        $pertanyaan->pertanyaan = request('pertanyaan');
        $pertanyaan->status = '0';
        $pertanyaan->save();
        return back();
    }
    
    function editPertanyaan($id){
        $pertanyaan = Pertanyaan::find($id);
        $pertanyaan->pertanyaan = request('pertanyaan');
        $pertanyaan->save();
        return back();
    }
    function updatePertanyaan($id,$status){
        $pertanyaan =  Pertanyaan::find($id);
        $pertanyaan->status = $status;
        $pertanyaan->save();
        return back();
    }
    function hapusPertanyaan($id){
        Pertanyaan::destroy($id);
        return back();
    }
}
