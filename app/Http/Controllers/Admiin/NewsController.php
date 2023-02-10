<?php

namespace App\Http\Controllers\Admiin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        return \view('admin.index');
    }

    public function create()
    {
        return \view('admin.news.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
        
    }
}
