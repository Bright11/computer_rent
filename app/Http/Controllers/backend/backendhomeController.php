<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Rented_item;
use App\Models\User;
use Illuminate\Http\Request;

class backendhomeController extends Controller
{
    //
    public function adminhome()
    {
        # code...
        return view('backend.adminhome');
    }

    public function add_category()
    {
        # code...
        return view('backend.add_category');
    }

    public function view_category()
    {
        # code...
        $viewcart=Category::all();
        return view('backend.view_category',['viewcart'=>$viewcart]);
    }

    public function add_product()
    {
        # code...
        $cartget=Category::all();
        return view('backend.add_product',['cartget'=>$cartget]);
    }

    public function view_product()
    {
        # code...
        $pro=Product::all();
        return view('backend.view_product',['pro'=>$pro]);
    }

public function view_rented_product()
{
    # code...
    $onrent=Rented_item::all();
    return view('backend.view_rented_product',['onrent'=>$onrent]);
}

public function addmin_view_returned_item()
{
    # code...
    $onrent=Rented_item::where('status','waiting')->get();
    return view('backend.addmin_view_returned_item',['onrent'=>$onrent]);
}

}
