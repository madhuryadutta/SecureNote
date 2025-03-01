<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    @yield('meta') {{-- Dynamic Meta Tags --}}
    <meta name="description"
        content="Secure Notes - A private and secure place to create, edit, and manage your notes effortlessly.">
    <meta name="keywords" content="Secure Notes, Private Notes, Note Management, Secure App, Privacy">
    <meta name="author" content="DataByteDigital">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#4A5568">

    <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gradient-to-r from-blue-100 via-purple-100 to-pink-100 text-gray-900 min-h-screen flex flex-col">
    <header class="bg-white shadow-md py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <a href="{{ route('home') }}" class="text-xl font-bold text-blue-600">Secure Notes</a>
            <nav>
                <a href="{{ route('notes.create') }}" class="text-gray-600 hover:text-blue-600 px-4">Create Note</a>
            </nav>
        </div>
    </header>
    <div class="flex-grow container mx-auto py-8">
        @yield('content')
    </div>
    <footer class="bg-white shadow-inner py-4 mt-auto">
        <div class="container mx-auto text-center text-gray-600">
            &copy; 2025 Secure Notes. All rights reserved.
        </div>
    </footer>
</body>

</html>
