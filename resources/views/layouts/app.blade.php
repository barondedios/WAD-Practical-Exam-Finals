<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Notes App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100 p-4">

    <header class="bg-white shadow-md py-4 mb-6">
    <div class="container mx-auto flex justify-between items-center px-4">
        <div>
            <a href="{{ route('notes.index') }}" class="text-xl font-bold text-gray-800">Notes App</a>
        </div>

        @auth
            <div class="flex items-center gap-4">
                <span class="text-gray-600">Hello, {{ Auth::user()->name }}</span>
                
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">
                        Logout
                    </button>
                </form>
            </div>
        @endauth
    </div>
</header>


    <main class="mt-6 max-w-3xl mx-auto">
        @yield('content')
    </main>
    
</body>
</html>
