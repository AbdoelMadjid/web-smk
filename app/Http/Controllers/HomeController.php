<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\Identity;
use App\Models\Jurusan;
use App\Models\Welcome;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $identity = Identity::all()->first();
        return view('home', [
            'title' => "Home",
            'name' => $identity->name,
            'identity' => $identity,
            'welcome' => Welcome::all()->first(),
            'header' => Header::all()->first(),
            'jurusan' => Jurusan::all(),
        ]);
    }
}
