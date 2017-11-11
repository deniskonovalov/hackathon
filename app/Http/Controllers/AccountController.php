<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GoogleMaps;
class AccountController extends Controller
{
    public function index()
    {
        $response = \GoogleMaps::load('directions')
            ->setParam([
                'origin'          => 'place_id:ChIJ685WIFYViEgRHlHvBbiD5nE',
                'destination'     => 'place_id:ChIJA01I-8YVhkgRGJb0fW4UX7Y',
            ])
           ->isLocationOnEdge(55.86483,-4.25161);

    dd( $response  );  // true
        return view('account.account_page');

    }
}
