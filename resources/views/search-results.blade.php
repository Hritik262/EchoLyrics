<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EchoLyrics</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
</head>
<body class="bg-gray-900 min-h-screen">
    <div class="container mx-auto py-10 px-4">
        <div class="text-center mb-10">
            <h1 class="text-4xl font-bold text-red-400 mb-6">Search Results for "{{ $song }}"</h1>
            <form action="{{ route('search') }}" method="POST" class="flex justify-center space-x-2">
                @csrf
                <input 
                    class="w-1/2 px-4 py-2 text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-red-400" 
                    type="text" 
                    name="query" 
                    placeholder="Search Again"
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

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($hits as $hit)
                @php
                    $result = $hit['result'];
                @endphp
                <div class="bg-gray-800 rounded-lg shadow-lg p-4">
                    <img src="{{ $result['header_image_thumbnail_url'] }}" alt="{{ $result['title'] }}" class="rounded mb-4">
                    <h2 class="text-xl font-bold text-white">{{ $result['full_title'] }}</h2>
                    <p class="text-gray-400">by {{ $result['artist_names'] }}</p>
                    <a href="{{ $result['url'] }}" target="_blank" class="text-red-400 mt-2 inline-block">View Lyrics</a>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
