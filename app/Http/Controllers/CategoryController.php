<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    public function index()
    {
        $categories     = app('db')->table('categories')->get();
        return response()->json($categories);
    }
}
