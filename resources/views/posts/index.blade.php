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

    @section('menu')
    <div class="navbar-start">
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </label>
            <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                <li><a href=" {{url('tambah')}} ">Tambah Postinagn <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a></li>
            </ul>
        </div>
    </div>
    @endsection

    @section('logo')
    <div class="navbar-center">
        <a href=" {{url('/')}} " class="btn btn-ghost normal-case text-xl">RPL Whispers</a>
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
                    <div class="chat-bubble text-[12px] md:text-lg">Jadilah orang yang pertama yang mengirimkan pesan!!!
                    </div>
                </div>
            </div>
        </div>
        @endif

        <div class="p-8 pt-20 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($posts as $post)
            <div class="card w-auto bg-base-100 shadow-xl">
                <div class="card-body">
                    <h2 class="card-title font-bold text-[14px] fsm:text-[16px] ism:text-[18px]">
                        {{$post->from}}</h2>
                    <h2 class="text-custum-text font-bold text-[14px] fsm:text-[16px] ism:text-[18px]"> <small
                            class="text-black"><i>to</i></small> {{$post->to}}</h2>
                    <small class="text-[10px] bsm:text-[14px]"> {{date('d M Y', strtotime($post->created_at	))}}
                    </small>
                    <p class="text-[14px] fsm:text-[16px] ism:text-[18px]">
                        {{$post->message}} </p>
                    <div class="card-actions justify-end">
                        <a href=" {{url("posts/$post->id")}} ">
                            <button class="btn btn-sm btn-outline btn-info"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </button>
                        </a>
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
    @include('sweetalert::alert')
    @endsection