<?php

namespace App\Http\Controllers;

use App\Models\Post; // import model post
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index() // function get list posts
    {
        $posts = Post::all(); // memanggil model Post
        return $posts;
    }

    function create(Request $request) // create post
    {
        $attributes = $this->validate($request, [
            'title' => 'required|string',
            'content' => 'required|string'
        ]);
        $createPost = Post::create($attributes);  // creating post data
        return response()->json([
            'message' => "data berhasil di buat",
            "data" => $createPost
        ]);
    }

    function detail($id)
    {
        return Post::find($id); // get detail data
    }

    function update(Request $request, $id)
    {
        // validasi data
        $attributes = $this->validate($request, [
            'title' => 'required|string',
            'content' => 'required|string'
        ]);
        // cari data post sesuai parameter ID
        $findPost = Post::findOrFail($id);
        // update data post
        $findPost->update($attributes);
        return response()->json([
            'message' => "data berhasil di ubah",
        ]);
    }

    function destroy($id) // delete data
    {
        $findPost = Post::findOrFail($id); // find data post
        $findPost->delete(); // delete data
        return response()->json([
            'message' => "data berhasil di hapus",
        ]);
    }
}
