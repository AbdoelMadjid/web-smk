<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ekstrakurikuler;
use App\Models\Identity;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'identity' => Identity::all()->first(),
            'kelas' => Kelas::all(),
            'jurusan' => Jurusan::all(),
            'category' => Category::all(),
            'post' => Post::all(),
            'ekstrakurikuler' => Ekstrakurikuler::all(),
            'admin' => User::all(),
        ]);
    }
}
