<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index()
    {
        return view('toko.index', [
            'cats' => Category::all()
        ]);
    }
}
