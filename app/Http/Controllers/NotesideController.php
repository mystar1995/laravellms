<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotesideController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('admin.noteside.index');
    }
}
