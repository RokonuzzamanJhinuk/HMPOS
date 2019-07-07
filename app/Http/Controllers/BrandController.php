<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function addBrand(Request $request)
    {
        $cat = new Brand();
        $cat->brandName = $request->brandName;
        $cat->brandInfo = $request->brandInfo;
        $cat->save();
        return 'OK';
    }

}
