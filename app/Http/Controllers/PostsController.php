<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(8);

        foreach ($posts as $post) {
            $post->message = Str::limit($post->message, 50);
        }

            $title = "Hapus Pesan";
            $text = "Yakin pesannya ingin di hapus?";
            confirmDelete($title, $text);
        
        $posts_view = ([
            'posts' => $posts,
        ]);

        return view('posts.index', $posts_view);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $from = $request->input('from');
        $to = $request->input('to');
        $message = $request->input('message');

        $request->validate([
            'from' => 'required',
            'to' => 'required',
            'message' => 'required',
        ], [
            'from.required' => 'Dari siapa?',
            'to.required' => 'Untuk siapa?',
            'message.required' => 'Pesannya mau apa?',
        ]);

        $user = Auth::user();

        if ($user) {
            $userId = $user->id;
        } else {
            $userId = null;
        }

        Post::insert([
            'from' => $from,
            'to' => $to,
            'user_id' => $userId,
            'message' => $message,
            'created_at' => date('Y:m:d'),
        ]);

        return redirect('/')->with('success', 'Postingan berhasil di tambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::where('id', $id)->first();
        $comments = $post->comments()->orderBy('id', 'DESC')->get();


        $post_view = ([
            'post' => $post,
            'comments' => $comments,
        ]);

        return view('posts.show', $post_view);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::where('id', $id)->first();

        $post_view = ([
            'post' => $post,
        ]);

        return view('posts.edit', $post_view);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $from = $request->input('from');
        $to = $request->input('to');
        $message = $request->input('message');

        $request->validate([
            'from' => 'required',
            'to' => 'required',
            'message' => 'required',
        ], [
            'from.required' => 'Dari siapa?',
            'to.required' => 'Untuk siapa?',
            'message.required' => 'Pesannya mau apa?',
        ]);

        $user = Auth::User();

        Post::where('id', $id)->update([
            'from' => $from,
            'to' => $to,
            'message' => $message,
        ]);

        return redirect("profil/$user->id")->with('success', 'Postingan berhasil di edit!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::where('id', $id)->delete();

        return redirect('/')->with('success', 'Postingan berhasil di hapus!');
    }
}