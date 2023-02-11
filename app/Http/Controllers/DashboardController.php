<?php

namespace App\Http\Controllers;

use App\Models\spp;
use App\Models\kelas;
use App\Models\pembayaran;
use App\Models\siswa;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->level != 'admin') {
            return redirect(route('pembayaran.index'));
        }
        return view('components.index', [
            'spp' => spp::all(),
            'kelas' => kelas::all(),
            'siswa' => siswa::all(),
            'user' => user::all()
        ]);
    }

    public function histori()
    {
        $checkHistory = auth()->guard('user')->check() ? pembayaran::all() : pembayaran::where('user_id', auth()->user()->id)->get();
        return view('components.histories', [
            'pageTitle' => 'Histori Pembayaranku',
            'histori' => $checkHistory
        ]);
    }
}
