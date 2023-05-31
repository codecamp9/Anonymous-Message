    @extends('layouts.app')

    @section('title', 'Login')

    @section('logo')
    <div class="navbar-start">
        <a href=" {{url('/')}} " class="btn btn-ghost normal-case text-xl">Like Like Shy</a>
    </div>
    @endsection

    @section('content')
    <div class="bg-custom-bg h-screen">
        <div class="flex justify-center h-screen items-center">
            <div class=" card w-96 bg-base-100 shadow-xl">
                <form action=" {{url('login')}} " method="post">
                    @csrf
                    <div class="card-body fel">
                        <h2 class="text-center font-bold text-xl text-custum-text">LOGIN</h2>
                        <div>
                            <small> <i>Username</i></small>
                            <input type="text"  class="input input-bordered w-full max-w-xs"
                                name="from" placeholder="Salsa"/>
                        </div>
                        <div>
                            <small> <i>Password</i></small>
                            <input type="password" placeholder="Encit" class="input input-bordered w-full max-w-xs"
                                name="to" />
                        </div>
                        <div class="card-actions justify-end">
                            <button type="submit" class="btn btn-accent">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection