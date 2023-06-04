    @extends('layouts.app')

    @section('title', 'Profile')

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
                <li><a href=" {{url('tambah')}} ">Tambah Postinagn</a></li>
            </ul>
        </div>
    </div>
    @endsection

    @section('logo')
    <div class="navbar-center">
        <a href=" {{url('/')}} " class="btn btn-ghost normal-case text-xl"> {{$user->name}} </a>
    </div>
    @endsection

    @section('content')
    <div class="bg-custom-bg md:h-screen">

    @if ($posts->isEmpty())
        <div class="flex justify-center">
            <div class="flex flex-col w-full p-5 md:w-[60%] h-screen justify-center">
                <div class="chat chat-start">
                    <div class="chat-bubble text-[12px] md:text-lg">Sepertinya kamu belum ada pesan rahasia??</div>
                </div>
                <div class="chat chat-end">
                    <div class="chat-bubble text-[12px] md:text-lg">Cepatlah kirimkan pesan rahasia kamu!!!
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
                       {{$post->from}} </h2>
                    <h2 class="text-custum-text font-bold text-[14px] fsm:text-[16px] ism:text-[18px]"> <small
                            class="text-black"><i>to</i></small> {{$post->to}} </h2>
                    <small class="text-[10px] bsm:text-[14px]"> {{date('d M Y', strtotime($post->created_at))}}
                    </small>
                    <p class="text-[14px] fsm:text-[16px] ism:text-[18px]">
                        {{$post->message}} </p>
                    <div class="card-actions justify-end">
                        <a href=" {{url("posts/$post->id")}} ">
                            <button class="btn btn-xs btn-outline btn-info">show</button>
                        </a>
                        <a href=" {{url("posts/$post->id/edit")}} ">
                        <button class=" btn btn-xs btn-outline btn-accent">Edit</button>
                        </a>

                         <form action=" {{url("profil/$post->id")}} " method="post">
                            @csrf
                            @method('delete')
                            <a href=" {{url("profil/$post->id")}} " class="btn btn-outline btn-error btn-xs"
                                data-confirm-delete="true">Delete</a>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @include('sweetalert::alert')
    @endsection