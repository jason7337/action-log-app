@extends('layouts.auth')

@section('title', 'Register')

@section('content')
    <div class="bg-white p-8 rounded shadow-md max-w-md mx-auto">
        <h2 class="text-2xl font-bold mb-6">Registro</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Nombre</label>
                <input type="text" name="name" id="name" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-indigo-500 @error('name') border-red-500 @enderror" value="{{ old('name') }}" required autofocus>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" name="email" id="email" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-indigo-500 @error('email') border-red-500 @enderror" value="{{ old('email') }}" required>
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold mb-2">Clave</label>
                <input type="password" name="password" id="password" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-indigo-500 @error('password') border-red-500 @enderror" required>
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="password_confirmation" class="block text-gray-700 font-bold mb-2">Confirma Clave</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-indigo-500" required>
            </div>
            <div>
                <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-600 focus:outline-none">Registrar</button>
            </div>
        </form>
    </div>
@endsection