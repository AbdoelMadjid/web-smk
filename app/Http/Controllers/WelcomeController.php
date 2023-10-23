<?php

namespace App\Http\Controllers;

use App\Models\Identity;
use App\Models\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.welcome.index', [
            'title' => 'Sambutan Kepala Sekolah',
            'welcome' => Welcome::all()->first(),
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
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function show(Welcome $welcome)
    {
        // Tidak Diakses
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function edit(Welcome $welcome)
    {
        return view('dashboard.welcome.edit', [
            'title' => 'Ubah Sambutan',
            'welcome' => $welcome,
            'identity' => Identity::all()->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Welcome $welcome)
    {
        // return $request;
        $validatedData = $request->validate([
            'kepsek_name' => 'required|max:255',
            'body' => 'required',
            'image' => 'max:5120'
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('sambutan-img');
        }

        Welcome::where('id', $welcome->id)->update($validatedData);
        return redirect('/dashboard/welcome')->with('success', 'Sambutan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function destroy(Welcome $welcome)
    {
        // Tidak Diakses
    }
}
