<?php

namespace App\Http\Controllers;

use App\Models\Identity;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.jurusan.index', [
            'title' => 'Data Jurusan',
            'identity' => Identity::all()->first(),
            'jurusans' => Jurusan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.jurusan.create', [
            'title' => 'Tambah Jurusan',
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
            'name' => 'required|max:255',
            'alias' => 'required|max:255',
            'descript' => 'required',
            'color' => 'required|max:255'
        ]);

        Jurusan::create($validatedData);
        return redirect('/dashboard/jurusan')->with('success', 'Jurusan berhasil diubah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function show(Jurusan $jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function edit(Jurusan $jurusan)
    {
        return view('dashboard.jurusan.edit', [
            'title' => 'Ubah Jurusan',
            'identity' => Identity::all()->first(),
            'jurusan' => $jurusan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jurusan $jurusan)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'alias' => 'required|max:255',
            'descript' => 'required',
            'color' => 'required|max:255'
        ]);

        Jurusan::where('id', $jurusan->id)->update($validatedData);
        return redirect('/dashboard/jurusan')->with('success', 'Jurusan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jurusan $jurusan)
    {
    }
}
