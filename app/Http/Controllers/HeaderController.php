<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\Identity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.header.index', [
            'title' => 'Header',
            'header' => Header::all()->first(),
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
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function show(Header $header)
    {
        // Tidak Diakses 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function edit(Header $header)
    {
        return view('dashboard.header.edit', [
            'title' => 'Ubah Header',
            'header' => $header,
            'identity' => Identity::all()->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Header $header)
    {
        $validatedData = $request->validate([
            'image_1' => 'image|file|max:5120',
            'image_2' => 'image|file|max:5120',
            'image_3' => 'image|file|max:5120',
            'image_4' => 'image|file|max:5120',
        ]);

        if ($request->file('image_1')) {
            if ($request->oldImage_1) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image_1'] = $request->file('image_1')->store('header-img');
        }

        if ($request->file('image_2')) {
            if ($request->oldImage_2) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image_2'] = $request->file('image_2')->store('header-img');
        }

        if ($request->file('image_3')) {
            if ($request->oldImage_3) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image_3'] = $request->file('image_3')->store('header-img');
        }

        if ($request->file('image_4')) {
            if ($request->oldImage_4) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image_4'] = $request->file('image_4')->store('header-img');
        }

        Header::where('id', $header->id)->update($validatedData);
        return redirect('/dashboard/header/')->with('success', 'Header berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function destroy(Header $header)
    {
        // Tidak Diakses
    }
}
