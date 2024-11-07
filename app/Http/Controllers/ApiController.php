<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    // Home Page
    public function welcome()
    {
        return view('welcome');
    }

    // Search Song Function
    public function SearchSong(Request $req)
    {
        $song = $req->input('query');
        $client = new Client();
        
        try {
            $response = $client->request('GET', 'https://genius-song-lyrics1.p.rapidapi.com/search/', [
                'headers' => [
                    'x-rapidapi-key' => env('SONG_API_KEY'),
                    'x-rapidapi-host' => 'genius-song-lyrics1.p.rapidapi.com',
                ],
                'query' => [
                    'q' => $song,
                    'per_page' => '10',
                    'page' => '1',
                ],
            ]);

            $data = json_decode($response->getBody()->getContents(), true);
            $hits = $data['hits'] ?? [];

            return view('search-results', compact('hits', 'song'));
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Failed to fetch song data. Please try again later.']);
        }
    }
}
