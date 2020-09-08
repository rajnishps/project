@extends('layouts.app')

@section('content')
    <div class="lg:flex">
        <div class="lg:m-6">
            @include('left_sidebar')
        </div>
        <div class="lg:flex-1">
            @include('middle')
        </div>
        <div class="lg:flex-1 m-1/4">
            @include('right_sidebar')
        </div>

    </div>

@endsection

