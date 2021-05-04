<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home');
        
    }
    public function ajaxRequest()
    {
        return view('welcome');

    }
    public function ajaxRequestPost(Request $request)
    {
        DB::table('posts')->insert([
            'title'=>$request->Code,
            'details'=>$request->Chief
        ]);
        return response()->json(['success'=>true,
        'message'=>'data inserted successfully']);
    }
}
