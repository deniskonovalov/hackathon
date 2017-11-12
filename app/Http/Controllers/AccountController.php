<?php

namespace App\Http\Controllers;
use Auth;
use User;
use Illuminate\Http\Request;
use Mapper;
use DB;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $data['event'] = DB::table('events')->orderBy('id', 'desc')->get();

        Mapper::map(49.9935, 36.230383);
        return view('account.account_page',compact('user'),$data);

    }
}
