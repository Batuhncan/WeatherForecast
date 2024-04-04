<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    public function getData(){
        $client = new Client();
        $response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts');
        $data = json_decode($response->getBody()->getContents(), true);

        $filterdata = array_filter($data, function ($item) {
            
            return $item['id'] == 2;
        });

        return view('data', compact('filterdata'));
    }
}
