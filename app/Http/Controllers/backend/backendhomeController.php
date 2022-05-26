<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Rented_item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class backendhomeController extends Controller
{
    //
    public function adminhome()
    {
        # code...
        $u=Session::get('user');
        if($u){
            $u=Session::get('user')['id'];
        if (Session::get('user')->user_role == 1 || Session::get('user')->user_role == 2) {
            $countuser = User::count();
            $studentnumber = User::where('status', 3)->count();
            $nustaff = User::where('status', 2)->count();
            $nupro = Product::count();
            $cus = User::where('status', 0)->count();
            return view('backend.adminhome', ['nupro' => $nupro, 'cus' => $cus, 'nustaff' => $nustaff, 'countuser' => $countuser, 'studentnumber' => $studentnumber]);
        } else {
            return redirect('index')->with('status', 'Stop it or be suspended');
        }
    }else{
        return redirect('/');
    }
    }

    public function add_category()
    {
        # code...
        $u=Session::get('user');
        if($u){
            $u=Session::get('user')['id'];
        if (Session::get('user')->user_role == 1 || Session::get('user')->user_role == 2) {
            return view('backend.add_category');
        } else {
            return redirect()->back();
        }
         }else {
            return redirect('/');
        }
    }

    public function view_category()
    {
        # code...
        $u=Session::get('user');
        if($u){
            $u=Session::get('user')['id'];
        if (Session::get('user')->user_role == 1 || Session::get('user')->user_role == 2) {
            $viewcart = Category::all();
            return view('backend.view_category', ['viewcart' => $viewcart]);
        } else {
            return redirect()->back();
        }
        } else {
            return redirect('/');
        }
    }

    public function add_product()
    {
        # code...
        $u=Session::get('user');
        if($u){
            $u=Session::get('user')['id'];

        if (Session::get('user')->user_role == 1 || Session::get('user')->user_role == 2) {
            $cartget = Category::all();
            return view('backend.add_product', ['cartget' => $cartget]);
        } else {
            return redirect()->back();
        }
    }else{
        return redirect('/');
    }
    }

    public function view_product()
    {
        # code...
        $u=Session::get('user');
        if($u){
            $u=Session::get('user')['id'];
        if (Session::get('user')->user_role == 1 || Session::get('user')->user_role == 2) {
            $pro = Product::all();
            return view('backend.view_product', ['pro' => $pro]);
        } else {
            return redirect()->back();
        }
    } else {
        return redirect('/');
    }
    }

    public function view_rented_product()
    {
        # code...
        $u=Session::get('user');
        if($u){
            $u=Session::get('user')['id'];
        if (Session::get('user')->user_role == 1 || Session::get('user')->user_role == 2) {
            $onrent = Rented_item::all();
            return view('backend.view_rented_product', ['onrent' => $onrent]);
        } else {
            return redirect()->back();
        }
    }else{
        return redirect('/');
    }
    }

    public function addmin_view_returned_item()
    {
        # code...
        $u=Session::get('user');
        if($u){
            $u=Session::get('user')['id'];
        if (Session::get('user')->user_role == 1 || Session::get('user')->user_role == 2) {
            $onrent = Rented_item::where('status', '=', 1)->get();
            return view('backend.addmin_view_returned_item', ['onrent' => $onrent]);
        } else {
            return redirect()->back();
        }
    } else {
        return redirect('/');
    }
    }
}
