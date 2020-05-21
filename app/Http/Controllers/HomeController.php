<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ConsoleTVs\Charts\Facades\Charts;
use App\Charts\HomeChart;
use App\Tanaman1;
use App\Tanaman2;
class HomeController extends Controller
{
    public function index(){
        $s0 = Tanaman1::select('nutrisi')->max('id');
        $s1 = $s0 - 1;
        $s2 = $s0 - 2;
        $s3 = $s0 - 3;
        $s4 = $s0 - 4;
        //ambil data dari tabel ta
        $tanaman1 = DB::table('tanaman1')->where('id',$s0)->get();        
        //$tanaman1 = Tanaman1::whereColumn('created_at','updated_at')
        //$tanaman1 = Tanaman1::select('nutrisi')
        //            ->orderBy('id','desc')
        //            ->take(5)
        //            ->get();
        //Charts        
        $sensor1 = Tanaman1::where('id',$s0)->value('nutrisi');
        $sensor2 = Tanaman1::where('id',$s1)->value('nutrisi');
        $sensor3 = Tanaman1::where('id',$s2)->value('nutrisi');
        $sensor4 = Tanaman1::where('id',$s3)->value('nutrisi');
        $sensor5 = Tanaman1::where('id',$s4)->value('nutrisi');
        $chart = new HomeChart;
        $chart->labels(['Sensor 1','Sensor 2','Sensor 3','Sensor4','Sensor5']);
        $chart->dataset('Nilai EC','line',[$sensor1,$sensor2,$sensor3,$sensor4,$sensor5])
        ->color("rgba(255, 99, 132, 1.0)")
        ->backgroundcolor("rgba(255, 99, 132, 0.2)");
        //mengirim data pegawai ke view
        return view('Home',['tanaman1' => $tanaman1, 'chart' =>$chart]);
    }

    public function tanam2(){
        $tanaman2 = DB::table('tanaman2')->where('id','1')->get();
        //Charts
        $borderColors = [
            "rgba(255, 99, 132, 1.0)",
            "rgba(22,160,133, 1.0)",
            "rgba(255, 205, 86, 1.0)"];
  
            $fillColors = [
              "rgba(255, 99, 132, 0.2)",
              "rgba(22,160,133, 0.2)",
              "rgba(255, 205, 86, 0.2)"];
  
          $sensor1 = DB::table('tanaman2')->where('id','1')->value('sensor1');
          $sensor2 = DB::table('tanaman2')->where('id','1')->value('sensor2');
          $sensor3 = DB::table('tanaman2')->where('id','1')->value('sensor3');
          $chart = new HomeChart;
          $chart->labels(['Sensor 1','Sensor 2','Sensor 3']);
          $chart->dataset('Nilai EC','line',[$sensor1,$sensor2,$sensor3])
          ->color($borderColors)
          ->backgroundcolor($fillColors);
          //mengirim data pegawai ke view
        return view('tanaman2',['tanaman2' => $tanaman2,'chart' =>$chart]);
    }

    public function store(Request $request){
        Tanaman1::create([
            'nutrisi' =>$request->nutrisi,
            'sensor1' =>$request->sensor1,
            'sensor2' =>$request->sensor2,
            'sensor3' =>$request->sensor3,
            'suhu' =>$request->suhu,
            'cahaya' =>$request->cahaya,
        ]);
        return back();
    }

    public function input(Request $request){
        Tanaman2::create([
            'nutrisi' =>$request->nutrisi,
            'sensor1' =>$request->sensor1,
            'sensor2' =>$request->sensor2,
            'sensor3' =>$request->sensor3,
            'suhu' =>$request->suhu,
            'cahaya' =>$request->cahaya,
        ]);
        return back();
        }
}
