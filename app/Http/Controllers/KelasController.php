<?php

namespace App\Http\Controllers;

use App\Models\Identity;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kelas.index', [
            'title' => 'Data Kelas',
            'identity' => Identity::all()->first(),
            'kelas' => Kelas::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kelas.create', [
            'title' => 'Tambah Kelas',
            'identity' => Identity::all()->first()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:kelas',
            'number' => 'required|unique:kelas'
        ]);

        Kelas::create($validatedData);
        return redirect('/dashboard/kelas')->with('success', 'Kelas berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kelas)
    {
        return view('dashboard.kelas.edit', [
            'title' => 'Ubah Kelas',
            'identity' => Identity::all()->first(),
            'kelas' => $kelas
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelas $kelas)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'number' => 'required'
        ]);

        Kelas::where('id', $kelas->id)->update($validatedData);
        return redirect('/dashboard/kelas')->with('success', 'Kelas berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kelas)
    {
        Kelas::destroy($kelas->id);
        return redirect('/dashboard/master-data/kelas')->with('success', 'Kelas berhasil dihapus!');
    }
}
