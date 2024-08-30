@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Bienvenido, {{ Auth::user()->name }}!</h1>
        <div class="bg-white shadow-md rounded-lg p-6">
            <p class="text-gray-700">Este es un panel de control de prueba.</p>
        </div>
    </div>
@endsection