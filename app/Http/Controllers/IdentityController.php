<?php

namespace App\Http\Controllers;

use App\Models\Identity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IdentityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.identity.index', [
            'title' => 'Identitas Sekolah',
            'identity' => Identity::all()->first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Tidak Diakses
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Tidak Diakses
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Identity  $identity
     * @return \Illuminate\Http\Response
     */
    public function show(Identity $identity)
    {
        // Tidak Diakses
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Identity  $identity
     * @return \Illuminate\Http\Response
     */
    public function edit(Identity $identity)
    {
        return view('dashboard.identity.edit', [
            'title' => 'Ubah Identitas Sekolah',
            'identity' => Identity::all()->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Identity  $identity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Identity $identity)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'alias' => 'required',
            'quotes' => 'required',
            'address' => 'required',
            'maps' => 'required|url',
            'email' => 'required',
            'nohp' => 'required',
            'telp' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
            'youtube' => 'required',
        ]);

        if ($request->file('brand')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $validatedData['brand'] = $request->file('brand')->store('brand');
        }
        Identity::where('id', $identity->id)->update($validatedData);
        return redirect('/dashboard/identity')->with('success', 'Identitas Sekolah berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Identity  $identity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Identity $identity)
    {
        // Tidak Diakses                                                                                                                
    }
}
