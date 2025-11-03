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
            ->select('ipl.home_no','ipl.status','komplek.is_deposit','ipl.is_addon','ipl.note','ipl.nominal','komplek.id_list','komplek.blok')
            ->leftJoin('ipl','ipl.home_no','=','komplek.no')
            ->whereIn('ipl.status',['Lunas','Pengecekan Admin'])
            ->whereRaw("TO_CHAR(period, 'yyyy-mm') = ?", [$period])
            //->orderByRaw("ipl.status = 'Lunas',komplek.is_deposit = 0,komplek.no asc")
            ->orderBy('komplek.id_list','asc')
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

    public function rekap_ipl()
    {
        $period = env('period');
        $total_warga = DB::table('ipl')->where('status','Lunas')->where('type',1)->where('is_deposit',0)->whereRaw("TO_CHAR(period, 'yyyy-mm') = ?", [$period])->count();
        $total = DB::table('ipl')->where('status','Lunas')->where('type',1)->where('is_deposit',0)->whereRaw("TO_CHAR(period, 'yyyy-mm') = ?", [$period])->sum('nominal');
        $list = DB::select("SELECT k.id_list, k.blok,k.is_security, i.home_no, MAX(CASE WHEN i.period = '2025-06-01' THEN i.status END) AS \"Juni\", MAX(CASE WHEN i.period = '2025-07-01' THEN i.status END) AS \"Juli\", MAX(CASE WHEN i.period = '2025-08-01' THEN i.status END) AS \"Agustus\", MAX(CASE WHEN i.period = '2025-09-01' THEN i.status END) AS \"September\", MAX(CASE WHEN i.period = '2025-10-01' THEN i.status END) AS \"Oktober\", MAX(CASE WHEN i.period = '2025-11-01' THEN i.status END) AS \"November\", MAX(CASE WHEN i.period = '2025-12-01' THEN i.status END) AS \"Desember\"
            FROM komplek k
            LEFT JOIN ipl i ON i.home_no = k.no
            WHERE i.status IN ('Lunas','Pengecekan Admin')
            GROUP BY k.id_list,k.blok,k.is_security,i.home_no
            ORDER BY k.id_list ASC");
        $total_warga_belum = DB::table('ipl')->where('status','Pengecekan Admin')->where('type',1)->where('is_deposit',0)->whereRaw("TO_CHAR(period, 'yyyy-mm') = ?", [$period])->count();
        return view('rekap_ipl', [
            'list' => $list,
            'total_warga' => $total_warga,
            'total' => $total,
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

        $pengeluaran = DB::table('laporan_keuangan')->where('type','pengeluaran')->whereRaw("TO_CHAR(period, 'yyyy-mm') = ?", [$period])->orderBy('transaction_date','asc')->get();
        return view('pengeluaran', ['pengeluaran' => $pengeluaran]);
    }

    public function laporan_kas(Request $request)
    {
        $period = $request->period;

        if($period == null){
            $period = date('Y-m');
        }

        $saldoAwal = DB::table('kas_warga')->whereRaw("TO_CHAR(period, 'yyyy-mm') = ?", [strtotime('-1 month', strtotime($period))])->sum('nominal');
        $totalKas1 = DB::table('kas_warga')->where('is_saldo_awal',1)->whereRaw("TO_CHAR(period, 'yyyy-mm') = ?", [$period])->sum('nominal');
        $totalKas2 = DB::table('kas_warga')->whereRaw("TO_CHAR(period, 'yyyy-mm') = ?", [$period])->sum('nominal');
        $kas_warga = DB::table('kas_warga')->whereRaw("TO_CHAR(period, 'yyyy-mm') = ?", [$period])->orderBy('created_at','asc')->get();
        $pengeluaran = DB::table('laporan_keuangan')->where('type','pengeluaran')->whereRaw("TO_CHAR(period, 'yyyy-mm') = ?", [$period])->orderBy('created_at','asc')->get();
        $totalPengeluaran = DB::table('laporan_keuangan')->where('type','pengeluaran')->whereRaw("TO_CHAR(period, 'yyyy-mm') = ?", [$period])->sum('nominal');
        return view('laporan_kas', ['saldoAwal' => $saldoAwal, 'totalKas1' => $totalKas1, 'totalKas2' => $totalKas2, 'totalPengeluaran' => $totalPengeluaran, 'kas_warga' => $kas_warga, 'pengeluaran' => $pengeluaran]);
    }

    public function confirmation(Request $request)
    {
        return redirect()->away('https://admin.wargasdv.com/payment-confirmation');
    }

    public function aspirasi()
    {
        return view('aspirasi');
    }

    public function sendAspirasi(Request $request)
    {
        $aspirasi = $request->aspirasi;
        DB::table('aspirasi')->insert([
            'aspirasi' => $aspirasi,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        return redirect()->back()->with('success', 'Aspirasi berhasil dikirim...');
    }

    public function agustusan()
    {
        $total_warga = DB::table('iuran')->where('status','Lunas')->count();
        $total = DB::table('iuran')->where('status','Lunas')->sum('nominal');
        $list = DB::select("SELECT k.id_list, k.blok, k.no,i.status,i.nominal
            FROM komplek k
            LEFT JOIN iuran i ON i.home_no = k.no
            ORDER BY k.id_list ASC");
        return view('agustusan', [
            'list' => $list,
            'total_warga' => $total_warga,
            'total' => $total
        ]);
    }
}
