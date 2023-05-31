    @extends('layouts.app')

    @section('title', 'Tambah')

    @section('content')
    <div class="bg-custom-bg">
        <div class="flex justify-center h-screen items-center box fsm:m-5">
            <div class=" card w-96 bg-base-100 shadow-xl">
                <form action=" {{url('/')}} " method="post">
                    @csrf
                    <div class="card-body fel">
                        <h2 class="text-center font-bold text-xl text-custum-text">Tambah Postingan</h2>
                        <div>
                            <small> <i>Dari</i></small>
                            <input type="text"  class="input input-bordered w-full max-w-xs"
                                name="from" placeholder="Salsa"/>
                        </div>
                        <div>
                            <small> <i>Untuk</i></small>
                            <input type="text" placeholder="Encit" class="input input-bordered w-full max-w-xs"
                                name="to" />
                        </div>
                        <div>
                            <small> <i>Pesan</i></small>
                            <textarea class="textarea textarea-bordered w-full"
                                placeholder="Encit lucu banget jadi like dehh" name="message"></textarea>
                        </div>
                        <div class="card-actions justify-end">
                            <button type="submit" class="btn btn-accent">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
    @endsection
   
