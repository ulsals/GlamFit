<?php

namespace App\Http\Controllers;
use App\Models\Makeup;
use Illuminate\Http\Request;
use App\Models\Kebaya;
use App\Models\Jas;
use App\Models\Layanan;
use App\Models\Pemesanan;

class MakeupController extends Controller
{
    public function index(){
        //ambil semua data makeup
        $makeups = Makeup::all();
        $kebayas = Kebaya::all(); 
        $jas = Jas::all();
        return view('homepage', compact('makeups', 'kebayas', 'jas'));
        
    }

    public function layananIndex()
    {
        $layanans = Layanan::all();
        return view('layanan.index', compact('layanans'));
    }

    public function pesan(Request $request)
    {
        $validated = $request->validate([
            'layanan_id' => 'required|integer',
            'nama' => 'required|string|max:255',
            'whatsapp' => 'required|string|max:20',
            'tanggal_sewa' => 'required|date',
        ]);

        Pemesanan::create($validated);

        return redirect()->back()->with('success', 'Pesanan berhasil dikirim!');
    }
}