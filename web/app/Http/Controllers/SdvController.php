<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SdvController extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function ipl()
    {
        $phone = env('phone');
        $norek = env('norek');
        $namerek = env('namerek');
        $period = env('period');
        $total_warga = DB::table('ipl')->where('status','Lunas')->where('type',1)->whereRaw("TO_CHAR(period, 'yyyy-mm') = ?", [$period])->count();
        $total = DB::table('ipl')->where('status','Lunas')->where('type',1)->whereRaw("TO_CHAR(period, 'yyyy-mm') = ?", [$period])->sum('nominal');
       
        return view('payment', ['phone' => $phone, 'norek' => $norek, 'namerek' => $namerek, 'total_warga' => $total_warga, 'total' => $total]);
    }

    public function laporan_keuangan()
    {
                  
        $total_kas_bulan_lalu = DB::table('kas_warga')->whereRaw("TO_CHAR(period, 'yyyy-mm') = ?", [date('Y-m', strtotime('-1 month'))])->sum('nominal');
        $total_pengeluaran_bulan_ini = DB::table('laporan_keuangan')->where('type','pengeluaran')->whereRaw("TO_CHAR(period, 'yyyy-mm') = ?", [date('Y-m')])->sum('nominal');
        return view('laporan_keuangan', ['total_kas_bulan_lalu' => $total_kas_bulan_lalu, 'total_pengeluaran_bulan_ini' => $total_pengeluaran_bulan_ini]);
    }
    
}
