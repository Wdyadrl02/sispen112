<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LogPanggilan;
use Illuminate\Support\Facades\DB;

class logController extends Controller
{
    function index(){
        $data['list_log'] = LogPanggilan::all();
        return view('admin.log.index',$data);
    }
    function logBelum(){
        $list_log = $data['list_log'] = LogPanggilan::where('status_notif',0)->get();
            foreach($list_log as $log){
                DB::table('log_panggilan')->where('id',$log->id)
                                        ->update(['status_notif' => 1]);
            }

        return view('admin.log.index',$data);
    }
    function delete($id){
        
        LogPanggilan::destroy($id);
        return back ()->with('Hapus', 'Data Berhasil Dihapus');
    }
    function bulan(){
        $bulan = request('bulan');

        $data['list_log'] = LogPanggilan::whereMonth('created_at',$bulan)->get();
        return view('admin.log.index',$data);
    }
}
