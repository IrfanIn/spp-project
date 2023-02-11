<?php

namespace App\Http\Controllers;

use App\Models\pembayaran;
use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class pembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('components.pembayaran.index', [
            'pembayaran' => pembayaran::all(),
            'pageTitle' => 'kelola data pembayaran',
            'siswa' => siswa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'tgl_bayar' => 'required',
            'user_id' => 'required',
            'siswa_id' => 'required',
            'bulan_dibayar' => 'required',
            'tahun_dibayar' => 'required',
            'jumlah_dibayar' => 'required'
        ]);

        pembayaran::create($input);
        return back()->with('success', 'input data berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(pembayaran $pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pembayaran $pembayaran)
    {
        $input = $request->validate([
            'tgl_bayar' => 'required',
            'user_id' => 'required',
            'siswa_id' => 'required',
            'bulan_dibayar' => 'required',
            'tahun_dibayar' => 'required',
            'jumlah_dibayar' => 'required'
        ]);

        pembayaran::where('id', $pembayaran->id)->update($input);
        return back()->with('success', 'berhasil update data pembayaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(pembayaran $pembayaran)
    {
        pembayaran::destroy($pembayaran->id);
        return back()->with('success', 'data pembayaran berhasil dihapus');
    }
}
