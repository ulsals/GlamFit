<?php

namespace App\Http\Controllers;
use App\Models\Makeup;
use Illuminate\Http\Request;
use App\Models\Kebaya;

class MakeupController extends Controller
{
    public function index(){
        //ambil semua data makeup
        $makeups = Makeup::all();
        $kebayas = Kebaya::all(); 
        //menampilkan data ke view "homepage"
        return view('homepage', compact('makeups', 'kebayas'));
    }
}
