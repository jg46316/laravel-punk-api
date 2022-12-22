<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BeerController extends Controller
{
    public function getBeers()
    {
        $apiRoot = 'https://api.punkapi.com/v2/beers';
        $response =  Http::get($apiRoot);
        $beers = json_decode($response->body());

        return view('beers')->with('beers',collect($beers)->paginate(10));
    }


}
