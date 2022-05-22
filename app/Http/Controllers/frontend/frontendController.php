<?php

namespace App\Http\Controllers\frontend;

use Carbon\Carbon;
use App\Models\Product;
use App\Models\Category;
use App\Models\Rented_item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mycccount;
use Illuminate\Support\Facades\Session;

class frontendController extends Controller
{
    //

    public function index()
    {
        # code...
        $pro=Product::all();
        $cart=Category::all();
        $sidberpro=Product::take(2)->get();
        return view('frontend.index',['pro'=>$pro,'cart'=>$cart,'sidberpro'=>$sidberpro]);
    }

    public function details($id)
    {
        # code...
        $detail=Product::find($id);

        return view('frontend.details',['detail'=>$detail]);
    }

    public function userprofil()
    {
        # code...

        $h=Carbon::now();

        $user=Session::get('user')['id'];
        $mybalance=Mycccount::where('user_id',$user)->sum('amount');
        $userinfo=Rented_item::where('user_id',$user)->get();
        return view('frontend.userprofil',['userinfo'=>$userinfo,'h'=>$h,'mybalance'=>$mybalance]);
    }

    public function credit_account()
    {

        return view('frontend.credit_account');
    }

    public function getcategory($id)
    {
        # code...
        $getcart=Product::where('cart_id',$id)->get();
        $cart=Category::all();
        $sidberpro=Product::take(2)->get();
        return view('frontend.getcategory',['getcart'=>$getcart,'cart'=>$cart,'sidberpro'=>$sidberpro]);
    }
    public function newsearch(Request $req)
    {
        # code...
        $cart=Category::all();
        $sidberpro=Product::take(2)->get();
        $searchq=$req->input('search');
        $getsearch=Product::query()
        ->where('keywords','LIKE', "%{$searchq}%")
        ->orWhere('product_name','LIKE',"%{$searchq}%")
        ->get();

        return view('frontend.searchresult',['getsearch'=>$getsearch,'cart'=>$cart,'sidberpro'=>$sidberpro]);
    }
}
