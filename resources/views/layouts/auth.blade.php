<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - ActionLog App</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #6366f1;
            --secondary-color: #4f46e5;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-md w-full px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <a href="{{ url('/') }}" class="block text-xl font-bold text-center text-gray-800 mb-6">
                ActionLog App
            </a>
            @yield('content')
        </div>
    </div>
</body>

</html>