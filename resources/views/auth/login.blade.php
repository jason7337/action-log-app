@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <div class="bg-white p-8 rounded shadow-md max-w-md mx-auto">
        <h2 class="text-2xl font-bold mb-6">Inicio</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" name="email" id="email" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-indigo-500 @error('email') border-red-500 @enderror" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700 font-bold mb-2">Clave</label>
                <input type="password" name="password" id="password" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-indigo-500" required>
            </div>
            <div>
                <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-600 focus:outline-none">Iniciar</button>
            </div>
        </form>
    </div>
@endsection