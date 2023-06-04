<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::where('id', $id)->first();
        $posts = Post::where('user_id', $id)->orderBy('id', 'desc')->get();

        foreach ($posts as $post) {
            $post->message = Str::limit($post->message, 50);
        }

        $view_user = ([
            'user' => $user,
            'posts' =>$posts,
        ]);

        $title = "Hapus Pesan";
        $text = "Yakin pesannya ingin di hapus?";
        confirmDelete($title, $text);

        return view('users.show', $view_user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::where('id', $id)->delete();

        $user = Auth::User();

        return redirect("profil/$user->id")->with('success', 'Postingan berhasil di hapus!');
    }
}