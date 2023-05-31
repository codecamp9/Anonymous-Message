    @extends('layouts.app')

    @section('title', 'Edit')
    
    @section('content')

    <ul>
        @foreach ($errors->all() as $error)
            <ul> {{$error}} </ul>
        @endforeach
    </ul>

    <div class="bg-custom-bg">
        <div class="flex justify-center h-screen items-center">
            <div class=" card w-96 bg-base-100 shadow-xl fsm:m-5">
                <form action=" {{url("posts/$post->id")}} " method="post">
                    @csrf
                    @method('patch')
                    <div class="card-body fel">
                        <h2 class="text-center font-bold text-xl text-custum-text">Edit Postingan</h2>
                        <div>
                            <small> <i>From</i></small>
                            <input type="text" placeholder="Salsa" class="input input-bordered w-full max-w-xs"
                                name="from" value=" {{$post->from}} "/>
                        </div>
                        <div>
                            <small> <i>To</i></small>
                            <input type="text" placeholder="Encit" class="input input-bordered w-full max-w-xs"
                                name="to" value=" {{$post->to}} "/>
                        </div>
                        <div>
                            <small> <i>Pesan</i></small>
                            <textarea class="textarea textarea-bordered w-full"
                                placeholder="Encit lucu banget jadi like dehh" name="message"> {{$post->message}} </textarea>
                        </div>
                        <div class="card-actions justify-end">
                            <button type="submit" class="btn btn-accent">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
    @endsection
    