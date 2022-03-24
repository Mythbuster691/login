<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class dataviewcontroller extends Controller
{
    function index(){

        $users = DB::select('select * from users ');
        return view('admin.dashboard',['users'=>$users]);

    }
}
