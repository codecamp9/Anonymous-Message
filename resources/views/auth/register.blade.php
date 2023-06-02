    @extends('layouts.app')

    @section('title', 'Register')

    @section('logo')
    <div class="navbar-start">
        <a href=" {{url('/')}} " class="btn btn-ghost normal-case text-xl">Like Like Shy</a>
    </div>
    @endsection
        
    @section('content')
    <div class="bg-custom-bg h-screen">
        <div class="flex justify-center h-screen items-center">
            <div class="m-5 card w-96 bg-base-100 shadow-xl">
                <form action=" {{url('register')}} " method="post">
                    @csrf
                    <div class="card-body fel">
                        <h2 class="text-center font-bold text-3xl text-custum-text pb-5">REGISTER</h2>
                        <div>
                            <small> <i>Username</i></small>
                            <input type="text" class="input input-bordered w-full max-w-xs" name="name"/>
                            @if ($errors->has('name'))
                                <small class="text-red-400"> {{$errors->first('name')}} </small>
                            @endif
                        </div>
                        <div>
                            <small> <i>Password</i></small>
                            <input type="password" class="input input-bordered w-full max-w-xs" name="password" />
                            @if ($errors->has('password'))
                                <small class="text-red-400"> {{$errors->first('password')}} </small>
                            @endif
                        </div>
                        <div>
                            <small> <i>Konfirmasi Password</i></small>
                            <input type="password" class="input input-bordered w-full max-w-xs" name="password_confirmation"  />
                        </div>
                        <small class="pt-1">Sudah punya akun? <a href=" {{url('login')}} " class="text-blue-400">Login</a></small>
                        <div class="card-actions justify-end pt-5">
                            <button type="submit" class="btn btn-accent w-full text-xl">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection