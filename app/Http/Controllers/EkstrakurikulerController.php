<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use App\Models\Identity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EkstrakurikulerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.ekstrakurikuler.index', [
            'title' => 'Ekstrakurikuler',
            'ekstrakurikulers' => Ekstrakurikuler::all(),
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
        return view('dashboard.ekstrakurikuler.create', [
            'title' => 'Tambah Eksrakurikuler',
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
            'body' => 'required',
            'image' => 'max:5120'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('sambutan-img');
        }

        Ekstrakurikuler::create($validatedData);
        return redirect('/dashboard/master-data/ekstrakurikuler')->with('success', 'Ekstrakurikuler berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ekstrakurikuler  $ekstrakurikuler
     * @return \Illuminate\Http\Response
     */
    public function show(Ekstrakurikuler $ekstrakurikuler)
    {
        return view('dashboard.ekstrakurikuler.show', [
            'title' => "Detail Ekstrakurikuler",
            'ekstrakurikuler' => $ekstrakurikuler,
            'identity' => Identity::all()->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ekstrakurikuler  $ekstrakurikuler
     * @return \Illuminate\Http\Response
     */
    public function edit(Ekstrakurikuler $ekstrakurikuler)
    {
        return view('dashboard.ekstrakurikuler.edit', [
            'title' => 'Ubah Ekstrakurikuler',
            'ekstrakurikuler' => $ekstrakurikuler,
            'identity' => Identity::all()->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ekstrakurikuler  $ekstrakurikuler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ekstrakurikuler $ekstrakurikuler)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'body' => 'required',
            'image' => 'max:5120'
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $validatedData['image'] = $request->file('image')->store('sambutan-img');
        }

        Ekstrakurikuler::where('id', $ekstrakurikuler->id)->update($validatedData);
        return redirect('/dashboard/master-data/ekstrakurikuler')->with('success', 'Ekstrakurikuler berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ekstrakurikuler  $ekstrakurikuler
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ekstrakurikuler $ekstrakurikuler)
    {
        Ekstrakurikuler::destroy('id', $ekstrakurikuler->id);
        return redirect('/dashboard/master-data/ekstrakurikuler')->with('success', 'Ekstrakurikuler berhasil dihapus');
    }
}
