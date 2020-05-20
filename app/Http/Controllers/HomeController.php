<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ConsoleTVs\Charts\Facades\Charts;
use App\Charts\HomeChart;

class HomeController extends Controller
{
    public function index(){
        //ambil data dari tabel ta
        $tanaman1 = DB::table('tanaman1')->where('id','4')->get();        
        //Charts
        $borderColors = [
          "rgba(255, 99, 132, 1.0)",
          "rgba(22,160,133, 1.0)",
          "rgba(255, 205, 86, 1.0)"];

          $fillColors = [
            "rgba(255, 99, 132, 0.2)",
            "rgba(22,160,133, 0.2)",
            "rgba(255, 205, 86, 0.2)"];

        $sensor1 = DB::table('tanaman1')->where('id','4')->value('sensor1');
        $sensor2 = DB::table('tanaman1')->where('id','4')->value('sensor2');
        $sensor3 = DB::table('tanaman1')->where('id','4')->value('sensor3');
        $chart = new HomeChart;
        $chart->labels(['Sensor 1','Sensor 2','Sensor 3']);
        $chart->dataset('Nilai EC','bar',[$sensor1,$sensor2,$sensor3])
        ->color($borderColors)
        ->backgroundcolor($fillColors);
        //mengirim data pegawai ke view
        return view('Home',['tanaman1' => $tanaman1, 'chart' =>$chart]);
    }
}
