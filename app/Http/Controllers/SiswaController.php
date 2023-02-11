<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\siswa;
use App\Models\spp;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('components.siswa.index', [
            'siswa' => siswa::with('kelas')->get(),
            'kelas' => kelas::all(),
            'spp' => spp::all(),
            'pageTitle' => 'kelola data siswa'
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
            'nis' => 'required',
            'nama_siswa' => 'required',
            'password' => 'required',
            'kelas_id' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'spp_id' => 'required',
        ]);

        $input['password'] = Hash::make($input['password']);

        siswa::create($input);
        return back()->with('success', 'input data gagal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, siswa $siswa)
    {
        $input = $request->validate([
            'nis' => 'required',
            'nama_siswa' => 'required',
            'password' => 'required',
            'kelas_id' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'spp_id' => 'required',
        ]);

        $input['password'] = Hash::make($input['password']);

        siswa::where('id', $siswa->id)->update($input);
        return back()->with('success', 'berhasil update data siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(siswa $siswa)
    {
        siswa::destroy($siswa->id);
        return back()->with('success', 'data siswa berhasil dihapus');
    }
}
