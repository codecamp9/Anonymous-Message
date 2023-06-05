    @extends('layouts.app')

    @section('title')
    {{$post->from}}
    @endsection

    @section('logo')
    <div class="navbar-start">
        <a href=" {{url('/')}} " class="btn btn-ghost normal-case text-xl">RPL Whispers</a>
    </div>
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

        <div class="mt-20 px-10">
            <form action=" {{url("comment/$post->id")}} " method="post">
                @method('post')
                @csrf
                <div class="flex gap-3 pb-3">
                    <div class="pt-5">
                        <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs"
                            name="comment" />
                    </div>
                    <div class="pt-5">
                        <button class="btn btn-info" type="submit"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                            </svg>
                        </button>
                    </div>
                </div>
            </form>

            @foreach ($comments as $comment)
            <div class="chat chat-start">
                <div class="chat-bubble"> {{$comment->comment}} </div>
            </div>
            @endforeach

        </div>
    </div>
    @include('sweetalert::alert')
    @endsection