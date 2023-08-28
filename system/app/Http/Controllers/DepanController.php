<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\edukasi;
use App\Models\Pertanyaan;
use App\Models\ruleDetail;
use App\Models\rule;
use App\Models\cekNilai;
use App\Models\Deskripsi;
use App\Models\penanganan;
use App\Models\LogPanggilan;
use App\Models\kasus;
class DepanController extends Controller
{
    function index(){
        $data['list_edukasi'] = edukasi::all();
        return view('landing.index',$data);
    }
    function layanan(){
        $data['list_edukasi'] = edukasi::all();
        return view('landing.layanan',$data);
    }
    function penanganan($id){
         $deskripsi = $data['deskripsi'] = Deskripsi::find($id);
        
        return view('landing.penanganan',$data);
    }
    function dashboard(){
        $data['jumlahLog'] = LogPanggilan::count();
        $data['tertangani'] = LogPanggilan::where('penanganan','tertangani')->count();
        $data['tidak'] = LogPanggilan::where('penanganan','tidak tertangani')->count();
        $data['edukasi'] = edukasi::count();



        $data['JanuariT'] = LogPanggilan::whereMonth('created_at', '1')->where('penanganan','tidak tertangani')->count();
        $data['FebruariT'] = LogPanggilan::whereMonth('created_at', '2')->where('penanganan','tidak tertangani')->count();
        $data['MaretT'] = LogPanggilan::whereMonth('created_at', '3')->where('penanganan','tidak tertangani')->count();
        $data['AprilT'] = LogPanggilan::whereMonth('created_at', '4')->where('penanganan','tidak tertangani')->count();
        $data['MaiT'] = LogPanggilan::whereMonth('created_at', '5')->where('penanganan','tidak tertangani')->count();
        $data['JuniT'] = LogPanggilan::whereMonth('created_at', '6')->where('penanganan','tidak tertangani')->count();
        $data['JuliT'] = LogPanggilan::whereMonth('created_at', '7')->where('penanganan','tidak tertangani')->count();
        $data['AgustusT'] = LogPanggilan::whereMonth('created_at', '8')->where('penanganan','tidak tertangani')->count();
        $data['SeptemberT'] = LogPanggilan::whereMonth('created_at','9')->where('penanganan','tidak tertangani')->count();
        $data['OktoberT'] = LogPanggilan::whereMonth('created_at', '10')->where('penanganan','tidak tertangani')->count();
        $data['NovemberT'] = LogPanggilan::whereMonth('created_at', '11')->where('penanganan','tidak tertangani')->count();
        $data['DesemberT'] = LogPanggilan::whereMonth('created_at', '12')->where('penanganan','tidak tertangani')->count();

        $data['Januari'] = LogPanggilan::whereMonth('created_at', '1')->where('penanganan','tertangani')->count();
        $data['Februari'] = LogPanggilan::whereMonth('created_at', '2')->where('penanganan','tertangani')->count();
        $data['Maret'] = LogPanggilan::whereMonth('created_at', '3')->where('penanganan','tertangani')->count();
        $data['April'] = LogPanggilan::whereMonth('created_at', '4')->where('penanganan','tertangani')->count();
        $data['Mai'] = LogPanggilan::whereMonth('created_at', '5')->where('penanganan','tertangani')->count();
        $data['Juni'] = LogPanggilan::whereMonth('created_at', '6')->where('penanganan','tertangani')->count();
        $data['Juli'] = LogPanggilan::whereMonth('created_at', '7')->where('penanganan','tertangani')->count();
        $data['Agustus'] = LogPanggilan::whereMonth('created_at', '8')->where('penanganan','tertangani')->count();
        $data['September'] = LogPanggilan::whereMonth('created_at','9')->where('penanganan','tertangani')->count();
        $data['Oktober'] = LogPanggilan::whereMonth('created_at', '10')->where('penanganan','tertangani')->count();
        $data['November'] = LogPanggilan::whereMonth('created_at', '11')->where('penanganan','tertangani')->count();
        $data['Desember'] = LogPanggilan::whereMonth('created_at', '12')->where('penanganan','tertangani')->count();

        return view('admin.dashboard',$data);
    }
    function daftar($id){
        $edukasi = $data['edukasi'] = edukasi::find($id);
        if($edukasi->pertanyaan == 1){
            $data['list_pertanyaan'] = Pertanyaan::where('id_jenis_edukasi',$id)->get();
            return view('daftar',$data);
        }else{
            $data['list_deskripsi'] = Deskripsi::where('id_jenis_edukasi',$id)->get();
            return view('landing.edukasi',$data);
        }
    }
    function adddaftar(){
        $list_data = Pertanyaan::where('id_jenis_edukasi',request('id_jenis_edukasi'))->get();
        foreach($list_data as $data){
            $rule = new rule;
            $rule->id_edukasi = $data->id_jenis_edukasi;
            $rule->id_pertanyaan = request('id_'.$data->id);
            $rule->id_deskripsi = request('deskripsi_'.$data->id);
            $rule->status = request($data->id);
            $rule->status_transaksi = 0;
            $rule->save();
        }
        return redirect('cekPenyakit');
    }
    function cekPenyakit(){
        $kk = rule::where('status',1)->where('status_transaksi',0)->groupBy('id_deskripsi')->get();
   
        foreach($kk as $bb){
            $data = rule::where('id_deskripsi',$bb->id_deskripsi)->where('status',1)->where('status_transaksi',0)->count();
            $ceknilai = DB::table('ceknilai')->insert([
                'id_edukasi'=> $bb->id_edukasi,
                'id_deskripsi'=> $bb->id_deskripsi,
                'nilai' => $data,
                'status' => '0'
            ]);
        }
        return redirect('Penyakit');
     
    }
    function Penyakit(){
        $nilaimax = cekNilai::where('status',0)->max('nilai');
        $data['hasil'] = cekNilai::where('nilai',$nilaimax)->where('status',0)->first();
        return view('landing.hasil',$data);
    }

    function tertangani($id_edukasi,$id_deskripsi){
        rule::where('id_edukasi',$id_edukasi)->delete();
        cekNilai::where('id_edukasi',$id_edukasi)->delete();

        $log = new LogPanggilan;
        $log->id_deskripsi = $id_deskripsi;
        $log->penanganan = 'tertangani';
        $log->status_notif = 0;
        $log->save();
        return redirect('layanan')->with('tertangani','kasus tertangani');
    }

    function takTertangani($id_edukasi,$id_deskripsi){
        rule::where('id_edukasi',$id_edukasi)->delete();
        cekNilai::where('id_edukasi',$id_edukasi)->delete();

        $log = new LogPanggilan;
        $log->id_deskripsi = $id_deskripsi;
        $log->penanganan = 'tidak tertangani';
        $log->status_notif = 0;
        $log->save();
        return redirect('layanan')->with('taktertangani','kasus tidak tertangani');
    }
    function kasus(){

    }

    //
}
