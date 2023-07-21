<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    function index()
    {
        return "ini dari controller";
    }

    function detail($id)
    {
        return $id;
    }

    function create(Request $request)
    {
        return $request->test;
    }

    function update(Request $request)
    {
        return $request->test;
    }

    function ubah(Request $request)
    {
        return $request->test;
    }

    function destroy($id)
    {
        return $id;
    }
}