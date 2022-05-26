<?php

namespace App\Http\Controllers\frontend;

use Carbon\Carbon;
use App\Models\Product;
use App\Models\Category;
use App\Models\Mycccount;
use App\Models\Rented_item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Insurance;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\Types\Null_;

class frontendController extends Controller
{
    //

    public function index()
    {
        # code...
        $pro = Product::all();
        $cart = Category::all();
        $sidberpro = Product::take(2)->get();
        return view('frontend.index', ['pro' => $pro, 'cart' => $cart, 'sidberpro' => $sidberpro]);
    }

    public function details($id)
    {
        # code...
        $detail = Product::find($id);
        $insurance = 50;
        return view('frontend.details', ['insurance' => $insurance, 'detail' => $detail]);
    }

    public function userprofil()
    {
        # code...

        $h = Carbon::now();

        $user = Session::get('user');
        if ($user) {
            $user = Session::get('user')['id'];
            $insur = Insurance::where('user_id', $user)->sum('amount');
            $totalconfirmitem = Rented_item::where('status', 'completed')->where('user_id', $user)->count();
            $usertotaiitem = Rented_item::where('user_id', $user)->count();
            $unreturnitems = Rented_item::where('user_id', '=', $user)->where('status', Null)->count();
            $mybalance = Mycccount::where('user_id', $user)->sum('amount');
            $userinfo = Rented_item::where('user_id', $user)->get();
            return view('frontend.userprofil', ['insur' => $insur, 'totalconfirmitem' => $totalconfirmitem, 'unreturnitems' => $unreturnitems, 'usertotaiitem' => $usertotaiitem, 'userinfo' => $userinfo, 'h' => $h, 'mybalance' => $mybalance]);
        } else {
            return redirect('/');
        }
    }

    public function credit_account()
    {

        $user = Session::get('user');
        if ($user) {
            return view('frontend.credit_account');
        } else {
            return redirect('/');
        }
    }

    public function getcategory($id)
    {
        # code...
        $getcart = Product::where('cart_id', $id)->get();
        $cart = Category::all();
        $sidberpro = Product::take(2)->get();
        return view('frontend.getcategory', ['getcart' => $getcart, 'cart' => $cart, 'sidberpro' => $sidberpro]);
    }
    public function newsearch(Request $req)
    {
        # code...
        $cart = Category::all();
        $sidberpro = Product::take(2)->get();
        $searchq = $req->input('search');
        $getsearch = Product::query()
            ->where('keywords', 'LIKE', "%{$searchq}%")
            ->orWhere('product_name', 'LIKE', "%{$searchq}%")
            ->get();

        return view('frontend.searchresult', ['getsearch' => $getsearch, 'cart' => $cart, 'sidberpro' => $sidberpro]);
    }

    public function cus_returning_item()
    {

        $user = Session::get('user');
        if ($user) {
            $user = Session::get('user')['id'];
            $unreturn = Rented_item::where('user_id', '=', $user)->where('status', Null)->get();
            return view('frontend.cus_returning_item', ['unreturn' => $unreturn]);
        } else {
            return redirect('/');
        }
    }

    public function userconfirmedreturn()
    {
        # code...
        $user = Session::get('user');
        if ($user) {
            $user = Session::get('user')['id'];
            $userinfo = Rented_item::where('status', 'completed')->where('user_id', $user)->get();
            return view('frontend.userconfirmedreturn', ['userinfo' => $userinfo]);
        } else {
            return redirect('/');
        }
    }
}
