<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AducepatdirawakadutController extends Controller
{
    public function getStory(){
            return DB::table('featurestory')
            ->where('slug', 'Adu_cepat_di_Rawa_Kadut')
            ->first();
    }
    public function index(){
        $title = $this->getStory()->titleID. ' - Feature Story';
        $text = $this->getStory()->titleID;
        $imageHero = 'aducepat.png';
        $nav = 'story';
        $imgdesc = 'DIKEPUNG ILALANG
        Ribuan bibit reforestasi terbenam dalam
        lautan alang-alang. Pertumbuhan bibit
        tanaman yang masih rentan ini sangat
        tergantung pada bantuan manusia untuk
        membuka ruang tumbuh. Hidup terasa
        berat bagi bibit ini lantaran harus bersaing
        dengan jutaan ilalang.AGUS PRIJONO';
        $publish = date("F Y", strtotime($this->getStory()->publishdate)) ;
        return view('frontend.aducepat', compact('title','text', 'imageHero','nav', 'imgdesc', 'publish'));
    }
}