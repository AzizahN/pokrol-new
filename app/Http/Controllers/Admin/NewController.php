<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index ()
    {
        return view('pages.tausiyah.index', [
            'content' => Content::class
        ]);
    }

    public function create()
    {
        return view('pages.tausiyah.create');
    }

    public function edit($id)
    {
        return view('pages.tausiyah.edit');
    }
}
