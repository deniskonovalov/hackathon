<?php

namespace App\Http\Controllers;
use Auth;
use User;
use Illuminate\Http\Request;
use Mapper;
use DB;
use App\Event;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        //$data['event'] = DB::table('events')->orderBy('id', 'desc')->get();


        Mapper::map(49.9935, 36.230383);
        return view('account.account_page',compact('user'));

    }

    public function uploadProfilePhoto()
    {
        $user = Auth::user();

        $photo = request()->file('profile_photo');

        if ($photo) {

            $filename = $photo->store('public');
            $user->profile_photo = substr($filename, strrpos($filename, '/') + 1);
            $user->save();
        }

        return back();

    }

    public function uploadAutoPhoto()
    {
        $user = Auth::user();

        $photo = request()->file('auto_photo');

        if ($photo) {

            $filename = $photo->store('public');
            $user->auto_photo = substr($filename, strrpos($filename, '/') + 1);
            $user->save();
        }

        return back();

    }
}
