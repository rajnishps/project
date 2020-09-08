@extends('layouts.app')

@section('content')

<div class="container-lg">
    <a href="/upload" class=" md:items-center mb-12 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full ">Upload</a>
</div>
    <div class="container-lg">
        <div class="row">
        @forelse($images as $image)
            <div class="">
                <div class="card">
                    <img src="{{asset($image->image)}}" class="card-img-top" alt="Broken" height="220" width="400">
                    @if(Auth::check())
                        @if($image->user_id == Auth::user()->id)
                    <div class="card-body">
                        <form action="/image/{{ $image->id }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <input type="submit" value="Delete" class="md:flex md:items-center mb-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">

                        </form>
                    </div>
                        @endif
                        @endif
                </div>
            </div>

        @empty
        <h1 class="text-danger">There is No Images</h1>
        @endforelse
        </div>
    </div>

@endsection
