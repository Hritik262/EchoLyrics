<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EchoLyrics</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
</head>
<body class="bg-gray-900 flex items-center justify-center min-h-screen">
    <div class="text-center p-6 bg-gray-800 rounded-lg shadow-lg max-w-md w-full">
        <h1 class="text-4xl font-bold text-red-400 mb-6">EchoLyrics</h1>
        <form action="{{ route('search') }}" method="POST" class="flex space-x-2">
            @csrf
            <input 
                class="w-full px-4 py-2 text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-red-400" 
                type="text" 
                name="query" 
                placeholder="Search Lyrics By Artist Or Song Name"
                required
            >
            <button 
                type="submit" 
                class="px-4 py-2 bg-red-400 text-white font-bold rounded-md hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-400"
            >
                Search
            </button>
        </form>
    </div>
</body>
</html>
