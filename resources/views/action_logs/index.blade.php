@extends('layouts.app')

@section('title', 'Registros de Acciones')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Registros de Acciones</h1>
        <div class="bg-white shadow-md rounded my-6">
            <table class="min-w-max w-full table-auto">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Fecha y Hora</th>
                        <th class="py-3 px-6 text-left">Usuario</th>
                        <th class="py-3 px-6 text-left">Operación</th>
                        <th class="py-3 px-6 text-left">Tabla</th>
                        <th class="py-3 px-6 text-left">ID Registro</th>
                        <th class="py-3 px-6 text-left">Página/Sección</th>
                        <th class="py-3 px-6 text-left">IP</th>
                        <th class="py-3 px-6 text-left">Estado</th>
                        <th class="py-3 px-6 text-left">Error</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm">
                    @foreach ($actionLogs as $log)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6">{{ $log->action_time }}</td>
                            <td class="py-3 px-6">{{ $log->user ? $log->user->name : 'N/A' }}</td>
                            <td class="py-3 px-6">{{ $log->operation_name }}</td>
                            <td class="py-3 px-6">{{ $log->modified_table ?: 'N/A' }}</td>
                            <td class="py-3 px-6">{{ $log->modified_record_id ?: 'N/A' }}</td>
                            <td class="py-3 px-6">{{ $log->page_section ?: 'N/A' }}</td>
                            <td class="py-3 px-6">{{ $log->ip_address ?: 'N/A' }}</td>
                            <td class="py-3 px-6">
                                <span class="px-2 py-1 font-semibold rounded-lg {{ $log->action_status == 'success' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                                    {{ $log->action_status }}
                                </span>
                            </td>
                            <td class="py-3 px-6">{{ $log->error_message ?: 'N/A' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $actionLogs->links() }}
        </div>
    </div>
@endsection