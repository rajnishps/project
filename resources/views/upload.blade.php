@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Upload Photo</div>

                <div class="container mx-auto">
                    <form action="/imager" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        @csrf
                        <div class="container mx-auto">
                            <input type="file" name="image[]" class="block text-gray-500 font-bold md:text-right mb-10 md:mb-10 pr-4" multiple accept="image/*">
                        </div>
                        <button class="md:flex md:items-center mb-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                            Upload
                        </button>

                    </form>
                </div>

            </div>
        </div>
    </div>


@endsection
