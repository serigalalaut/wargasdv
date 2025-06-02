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
        $total_warga = DB::table('ipl')->where('status','Lunas')->where('type',1)->where('is_deposit',0)->whereRaw("TO_CHAR(period, 'yyyy-mm') = ?", [$period])->count();
        $total = DB::table('ipl')->where('status','Lunas')->where('type',1)->where('is_deposit',0)->whereRaw("TO_CHAR(period, 'yyyy-mm') = ?", [$period])->sum('nominal');
        $list = DB::table('komplek')
            ->select('ipl.home_no','ipl.status','komplek.is_deposit','ipl.is_addon','ipl.note','ipl.nominal')
            ->leftJoin('ipl','ipl.home_no','=','komplek.no')
            ->whereIn('ipl.status',['Lunas','Pengecekan Admin'])
            ->whereRaw("TO_CHAR(period, 'yyyy-mm') = ?", [$period])
            //->orderByRaw("ipl.status = 'Lunas',komplek.is_deposit = 0,komplek.no asc")
            ->orderBy('ipl.created_at','desc')
            ->get();
        $total_warga_belum = DB::table('ipl')->where('status','Pengecekan Admin')->where('type',1)->where('is_deposit',0)->whereRaw("TO_CHAR(period, 'yyyy-mm') = ?", [$period])->count();
            
        return view('payment', [
            'phone' => $phone, 
            'norek' => $norek, 
            'namerek' => $namerek, 
            'total_warga' => $total_warga, 
            'total' => $total, 
            'list' => $list,
            'total_warga_belum' => $total_warga_belum
        ]);
    }

    public function laporan_keuangan()
    {
                  
        $total_kas_bulan_lalu = DB::table('kas_warga')->whereRaw("TO_CHAR(period, 'yyyy-mm') = ?", [date('Y-m')])->sum('nominal');
        $total_pengeluaran_bulan_ini = DB::table('laporan_keuangan')->where('type','pengeluaran')->whereRaw("TO_CHAR(period, 'yyyy-mm') = ?", [date('Y-m')])->sum('nominal');
        return view('laporan_keuangan', ['total_kas_bulan_lalu' => $total_kas_bulan_lalu, 'total_pengeluaran_bulan_ini' => $total_pengeluaran_bulan_ini]);
    }

    public function Pengeluaran(Request $request)
    {
        $period = $request->period;

        if($period == null){
            $period = date('Y-m');
        }

        $pengeluaran = DB::table('laporan_keuangan')->where('type','pengeluaran')->whereRaw("TO_CHAR(period, 'yyyy-mm') = ?", [$period])->get();
        return view('pengeluaran', ['pengeluaran' => $pengeluaran]);
    }

    public function laporan_kas(Request $request)
    {
        $period = $request->period;

        if($period == null){
            $period = date('Y-m');
        }

        $saldoAwal = DB::table('kas_warga')->whereRaw("TO_CHAR(period, 'yyyy-mm') = ?", [strtotime('-1 month', strtotime($period))])->sum('nominal');
        $totalKas = DB::table('kas_warga')->whereRaw("TO_CHAR(period, 'yyyy-mm') = ?", [$period])->sum('nominal');
        $kas_warga = DB::table('kas_warga')->whereRaw("TO_CHAR(period, 'yyyy-mm') = ?", [$period])->get();
        $pengeluaran = DB::table('laporan_keuangan')->where('type','pengeluaran')->whereRaw("TO_CHAR(period, 'yyyy-mm') = ?", [$period])->get();
        $totalPengeluaran = DB::table('laporan_keuangan')->where('type','pengeluaran')->whereRaw("TO_CHAR(period, 'yyyy-mm') = ?", [$period])->sum('nominal');
        return view('laporan_kas', ['saldoAwal' => $saldoAwal, 'totalKas' => $totalKas, 'totalPengeluaran' => $totalPengeluaran, 'kas_warga' => $kas_warga, 'pengeluaran' => $pengeluaran]);
    }

    public function confirmation(Request $request)
    {
        return redirect()->away('https://admin.wargasdv.com/payment-confirmation');
    }
}
