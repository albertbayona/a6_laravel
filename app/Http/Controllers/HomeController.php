<?php

namespace App\Http\Controllers;

use App\Publication;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);//busca  que tenga uno de los 2 roles
        $publications=Publication::all();
        return view('home',compact('publications'));
    }

}
