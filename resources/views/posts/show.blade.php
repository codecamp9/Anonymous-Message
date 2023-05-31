    @extends('layouts.app')

    @section('title')
        {{$post->from}}
    @endsection
    
    @section('content')
    <div class="bg-custom-bg h-screen">
        <div class="font-bold pt-10 px-10 text-2xl text-custum-text md:text-4xl">
            <h1> <small>Truntuk</small> {{$post->to}} <small>dari</small> {{$post->from}} </h1>
        </div>
        <small class="px-10"> {{date('d M Y', strtotime($post->created_at))}} </small>
        <div class="mx-10 mt-5 text-1xl">
            <p> {{$post->message}} </p>
        </div>
    </div>
    @include('sweetalert::alert')
    @endsection
    