<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(Request $request)
    {
        $cat = new Category();
        $cat->catName = $request->catName;
        $cat->catInfo = $request->catInfo;
        $cat->save();
        return 'OK';
    }

    public function allCategory()
    {
        $categories = Category::all();
        return response()->json(['categories' => $categories]);
    }
}
                                                                                                                                  