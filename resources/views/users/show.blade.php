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
                        <a href=" {{url("posts/$post->id/edit")}} ">
                            <button class=" btn btn-sm btn-outline btn-accent"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                            </button>
                        </a>

                        <form action=" {{url("profil/$post->id")}} " method="post">
                            @csrf
                            @method('delete')
                            <a href=" {{url("profil/$post->id")}} " class="btn btn-outline btn-error btn-sm"
                                data-confirm-delete="true"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @include('sweetalert::alert')
    @endsection