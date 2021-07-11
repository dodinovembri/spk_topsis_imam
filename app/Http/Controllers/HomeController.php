<?php

namespace App\Http\Controllers;

use App\Models\AlternativeModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (isset(auth()->user()->id)) {
            return view('admin.home.index');
        }else{
            $data['alternatives'] = AlternativeModel::all();
            return view('home', $data);
        }
    }
}
