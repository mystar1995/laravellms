<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('admin.requests.index');
    }
}
