<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class TestController extends Controller
{
    function index()
    {
        $create = Post::create([
            'title' => 'halo',
            'description' => 'halo',
            'foto' => 'fotonya'
        ]);
    }
}
