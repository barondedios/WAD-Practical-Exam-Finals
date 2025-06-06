<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Notes App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans antialiased flex items-center justify-center min-h-screen">

    <div class="text-center p-8 bg-white shadow rounded">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Welcome to Notes App</h1>
        <p class="text-gray-600 mb-6">A simple Laravel app to manage your personal notes securely.</p>

        <div class="space-x-4">
            <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Login</a>
            <a href="{{ route('register') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded">Register</a>
        </div>
    </div>

</body>
</html>
