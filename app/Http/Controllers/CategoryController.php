<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('toko.addcategory');
    }
    public function store(Request $request)
    {
        $model = $request->validate([
            'name' => ['required', 'max:255'],
        ]);

        //enkripsi password
        Category::create($model);

        return redirect('toko/index');
    }
}
