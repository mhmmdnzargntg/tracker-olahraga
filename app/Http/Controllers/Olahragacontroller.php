<?php

namespace App\Http\Controllers;
use App\Models\Olahraga;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class Olahragacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Olahraga::all();

        $totalSesi = Olahraga::count();

        $totalKalori = Olahraga::sum('kalori');

        $totalDurasi = Olahraga::sum('durasi');

        return view('dashboard', compact('data', 'totalSesi', 'totalKalori', 'totalDurasi'));
    }

        public function create()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
        'nama' => 'required',
        'jenis_olahraga' => 'required',
        'durasi' => 'required',
        'kalori' => 'required',
        'tanggal' => 'required',
        'pesan' => 'required',
    ]);
        Olahraga::create([
            'nama' => $request->nama,
            'jenis_olahraga' => $request->jenis_olahraga,
            'durasi' => $request->durasi,
            'kalori' => $request->kalori,
            'tanggal' => $request->tanggal,
            'pesan' => $request->pesan,
        ]);
        return redirect('/olahraga')->with('sukses', 'Data Berhasil Ditambahkan!');
    }
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
  */
    public function edit($id)
    {
        $olahraga = Olahraga::findOrFail($id);

        return view('edit', compact('olahraga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $data)
    {
               $request->validate([
        'nama' => 'required',
        'jenis_olahraga' => 'required',
        'durasi' => 'required',
        'kalori' => 'required',
        'tanggal' => 'required',
        'pesan' => 'required',
    ]);
    
        $data = Olahraga::find($data);
        $data->update([
            'nama' => $request->nama,
            'jenis_olahraga' => $request->jenis_olahraga,
            'durasi' => $request->durasi,
            'kalori' => $request->kalori,
            'tanggal' => $request->tanggal,
            'pesan' => $request->pesan,
        ]);
        return redirect('/olahraga')->with('succes', 'Data berhasil di ubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($data)
    {
        $data = Olahraga::find($data);

        $data->delete();

        return redirect('/olahraga')->with('berhasil', 'Data berhasil di hapus!');
    }
    public function hitung(){

        return view('hitung');
    }
}
