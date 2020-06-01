<?php

namespace App\Http\Controllers;

use App\Journal;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class SearchController extends Controller
{
    const uri = 'http://ec2-3-0-183-165.ap-southeast-1.compute.amazonaws.com/search';

    public function index(Request $request) {
        $this->validate($request, [
            'search',
        ]);

        $searchRequest = $request->search;

        $headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        $journals = Journal::all();

        $searchdata = [
            'data' => $journals->map(function ($item) {
                    return [
                        'title' => $item->title,
                        'abstract' => $item->abstract,
                        'keywords' => explode(',', $item->keywords),
                        'authors' => explode(',', $item->authors),
                    ];
                }),
        ];

        if (isset($request->search)) {
            $search = strtolower($request->search);

            $searchdata['keyword'] = $search;


            try {
                $client = new Client();

                $response = $client->request('post', self::uri, [
                    'headers' => $headers,
                    'json' => $searchdata
                ]);

                $body = $response->getBody();

                $content = json_decode($body->getContents());
            } catch (RequestException $e) {
                \Log::error($e->getMessage());
                throw new \Exception($e->getMessage());
            }
        } else {
            $content = [];
        }

        return view('home', compact('searchRequest', 'content'));
    }
}
