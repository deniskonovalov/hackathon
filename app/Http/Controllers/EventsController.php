<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class EventsController extends Controller
{
    public function store()
    {
        $this->validate(request(), [
            'body'  => 'required',
            'lng'   => 'required',
            'lat'   => 'required',
            'title' => 'required',
        ]);
        $data = array('title'   => request('title') ,'body'    => request('body'),'lng'     => request('lng'),'lat'     =>  request('lat'),'user_id' => auth()->id() );
        //var_dump($_POST);exit;
        DB::table('events')->insert($data);
        // Event::create([
        //     'title'   => request('title'),
        //     'body'    => request('body'),
        //     'lng'     => request('lng'),
        //     'lat'     =>  request('lat'),
        //     'user_id' => auth()->id()
        // ]);

        return back();
    }
}
