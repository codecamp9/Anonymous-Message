    @extends('layouts.app')

    @section('title', 'Home')

    @section('cari')
    <div class="dropdown dropdown-end">
        <button class="btn btn-ghost btn-circle">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </button>
        <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-60">
            <div class="form-control">
                <input type="text" placeholder="Search" class="input w-full max-w-xs" />
            </div>
            </li>
        </ul>
    </div>
    @endsection

    @section('content')
    <div class="bg-custom-bg md:h-screen">

        @if ($posts->isEmpty())
        <div class="flex justify-center">
            <div class="flex flex-col w-full p-5 md:w-[60%] h-screen justify-center">
                <div class="chat chat-start">
                    <div class="chat-bubble text-[12px] md:text-lg">Mari kirimkan pesan rahasia kamu...</div>
                </div>
                <div class="chat chat-end">
                    <div class="chat-bubble text-[12px] md:text-lg">Jadilah orang yang pertama yang mengirimkan pesan!!!</div>
                </div>
            </div>
        </div>
        @endif

        <div class="p-8 pt-20 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($posts as $post)
            <div class="card w-auto bg-base-100 shadow-xl">
                <div class="card-body">
                    <h2
                        class="card-title font-bold text-[14px] fsm:text-[16px] ism:text-[18px]">
                        {{$post->from}}</h2>
                        <h2 class="text-custum-text font-bold text-[14px] fsm:text-[16px] ism:text-[18px]"> <small class="text-black"><i>to</i></small> {{$post->to}}</h2>
                    <small class="text-[10px] bsm:text-[14px]"> {{date('d M Y', strtotime($post->created_at	))}} </small>
                    <p
                        class="text-[14px] fsm:text-[16px] ism:text-[18px]">
                        {{$post->message}} </p>
                    <div class="card-actions justify-end">
                        <a href=" {{url("posts/$post->id")}} ">
                            <button class="btn btn-xs btn-outline btn-info">Lihat</button>
                        </a>
                        <a href=" {{url("posts/$post->id/edit")}} ">
                            <button class="btn btn-xs btn-outline btn-accent">Edit</button>
                        </a>

                        <form action=" {{url("posts/$post->id")}} " method="post">
                            @csrf
                            @method('delete')
                            <a href="{{url("posts/$post->id")}}" class="btn btn-outline btn-error btn-xs" data-confirm-delete="true">Delete</a>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mx-10 pt-10 pb-10">
            {{ $posts->links() }}
        </div>
    </div>
    @include('sweetalert::alert')
    @endsection