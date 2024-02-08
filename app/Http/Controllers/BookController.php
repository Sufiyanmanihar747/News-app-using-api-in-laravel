<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function makeRequest($search, $country, $category, $title)
    {
        $date = date("Y-m-d");
        if (!empty($search)) {
            // dd($search);
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->get('https://newsapi.org/v2/everything', [
                'q' => $search,
                'sortBy' => 'publishedAt',
                'apiKey' => '882ca770482a466d85e735b2a60a6887',
            ]);
        } elseif ($title) {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->get('https://newsapi.org/v2/everything', [
                'q' => $title,
                'from' => $date,
                'sortBy' => 'publishedAt',
                'apiKey' => '882ca770482a466d85e735b2a60a6887',
            ]);
        } elseif ($category) {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->get('https://newsapi.org/v2/top-headlines', [
                'category' => $category,
                'from' => $date,
                'sortBy' => 'publishedAt',
                'apiKey' => '882ca770482a466d85e735b2a60a6887',
            ]);
        } elseif (!empty($country)) {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->get('https://newsapi.org/v2/top-headlines', [
                'country' => $country,
                // 'category' => $category,
                'from' => $date,
                'sortBy' => 'publishedAt',
                'apiKey' => '882ca770482a466d85e735b2a60a6887',
            ]);
        }
        // https://newsapi.org/v2/everything?q={$title}&from=2024-01-03&sortBy=publishedAt&apiKey=
        // 6cc7195b783e471dbc539dd0678f593a
        // 882ca770482a466d85e735b2a60a6887
        // a7bf91fa64ab446db77fc74f76942d83
        // dd($request);

        if ($response->successful()) {
            return $response->json();
        } else {
            $error = "HTTP Error #" . $response->status();
            return response()->json($error);
        }
    }

    public function country(Request $request)
    {
        $country = $request->input('country', 'in');
        $articles = $this->makeRequest(null, $country, null, null);
        return view('index', compact('articles'));
    }

    public function search(Request $request)
    {
        // dump($request);
        $search = $request->input('query');
        // dd($search);
        $articles = $this->makeRequest($search, null, null, null);
        return view('index', compact('articles'));
    }

    public function show(Request $title)
    {
        dump($title);
        $article = $this->makeRequest(null, null, null, $title);
        dd($article);
        return view('show', compact('article'));
    }
}
