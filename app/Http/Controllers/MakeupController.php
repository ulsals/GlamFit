<?php

namespace App\Http\Controllers;
use App\Models\Makeup;
use Illuminate\Http\Request;
use App\Models\Kebaya;
use App\Models\Jas;

class MakeupController extends Controller
{
    public function index(){
        //ambil semua data makeup
        $makeups = Makeup::all();
        $kebayas = Kebaya::all(); 
        $jas = Jas::all();
        return view('homepage', compact('makeups', 'kebayas', 'jas'));
        
    }
}
