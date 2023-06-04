    @extends('layouts.app')

    @section('title', 'Edit')

    @section('logo')
    <div class="navbar-start">
        <a href=" {{url('/')}} " class="btn btn-ghost normal-case text-xl">Like Like Shy</a>
    </div>
    @endsection
    
    @section('content')
    <div class="bg-custom-bg">
        <div class="flex justify-center h-screen items-center">
            <div class=" card w-96 bg-base-100 shadow-xl fsm:m-5">
                <form action=" {{url("posts/$post->id")}} " method="post">
                    @csrf
                    @method('patch')
                    <div class="card-body fel">
                        <h2 class="text-center font-bold text-xl text-custum-text">Edit Postingan</h2>
                        <div>
                            <small> <i>Dari</i></small>
                            <input type="text" placeholder="Salsa" class="input input-bordered w-full max-w-xs"
                                name="from" value=" {{$post->from}} "/>
                            @if ($errors->has('from'))
                                <small class="text-red-400"> {{$errors->first('from')}} </small>
                            @endif
                        </div>
                        <div>
                            <small> <i>Untuk</i></small>
                            <input type="text" placeholder="Encit" class="input input-bordered w-full max-w-xs"
                                name="to" value=" {{$post->to}} "/>
                            @if ($errors->has('from'))
                                <small class="text-red-400"> {{$errors->first('to')}} </small>
                            @endif
                        </div>
                        <div>
                            <small> <i>Pesan</i></small>
                            <textarea class="textarea textarea-bordered w-full"
                                placeholder="Encit lucu banget jadi like dehh" name="message"> {{$post->message}} </textarea>
                            @if ($errors->has('from'))
                                <small class="text-red-400"> {{$errors->first('message')}} </small>
                            @endif
                        </div>
                        <div class="card-actions justify-end">
                            <button type="submit" class="btn btn-accent">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
    