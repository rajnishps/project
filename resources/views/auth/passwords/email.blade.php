@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="mb-6">
                                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                       for="email"
                                >
                                    Email
                                </label>

                                <input class="border border-gray-400 p-2 w-full"
                                       type="email"
                                       name="email"
                                       id="email"
                                       value="{{ old('email') }}"
                                       required
                                       autofocus
                                       autocomplete="email"
                                >

                                @error('email')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <button type="submit"
                                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                                >
                                    Send Reset Password Link
                                </button>
                            </div>

                            @if (session('status'))
                                <div class="text-sm text-gray-800" role="alert">
                                    {{ session('status') }}
                                </div>
                        @endif
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
