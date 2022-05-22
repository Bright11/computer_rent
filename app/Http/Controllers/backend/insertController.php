<?php

namespace App\Http\Controllers\backend;

use App\Models\Product;
use App\Models\Category;
use App\Models\Rented_item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Insurance;
use App\Models\Mycccount;
use Illuminate\Support\Facades\Session;

class insertController extends Controller
{
    //
    public function addcategorytodb(Request $req)
    {
        $validated = $req->validate([
            'name' => 'required|unique:categories',
        ]);
        # code...
        $addcart=new Category;
        $addcart->name=$req->name;
        $addcart->save();
        return redirect('view_category')->with('status','Success');
    }

    public function addproducttodb(Request $req)
    {
        # code...
        $pro=new Product;
        $pro->cart_id=$req->cart_id;
        $pro->product_name=$req->product_name;
        $pro->price=$req->price;
        $pro->keywords=$req->keywords;
        $pro->description=$req->description;
        $pro->computer_size=$req->computer_size;
        $pro->computer_ram=$req->computer_ram;
        $pro->operating_system=$req->operating_system;
        $pro->display_size=$req->display_size;
        $pro->port_number=$req->port_number;
        $pro->hdmi_port=$req->hdmi_port;
        $file=$req->file('image');
         $extention = $file->getClientOriginalExtension();
         $filename=time().'.'.$extention;
         $file->move('product/',$filename);
         $pro->image=$filename;
         $pro->save();
        return redirect('view_product')->with('status','success');
    }

    public function edite_product($id)
    {
        # code...
       $editpro=Product::find($id);
        return view('backend.edite_product',['editpro'=>$editpro]);
    }

    public function editproducttodb(Request $req,$id)
    {
        # code...
        $pro=Product::where('id',$id)->first();
        $pro->product_name=$req->product_name;
        $pro->price=$req->price;
        $pro->keywords=$req->keywords;
        $pro->description=$req->description;
        $pro->computer_size=$req->computer_size;
        $pro->computer_ram=$req->computer_ram;
        $pro->operating_system=$req->operating_system;
        $pro->display_size=$req->display_size;
        $pro->port_number=$req->port_number;
        $pro->hdmi_port=$req->hdmi_port;
        if($req->hasFile('image')){
        $file=$req->file('image');
         $extention = $file->getClientOriginalExtension();
         $filename=time().'.'.$extention;
         $file->move('product/',$filename);
         $pro->image=$filename;
        }
         $pro->update();
         return redirect('view_product')->with('status','success');
    }

    public function deletepro($id)
    {
        //return $id;
        # code...
        $user=Session::get('user')['id'];
     $deletepro= Product::destroy($id);

     if($deletepro){
        Rented_item::where('product_id',$id)->destroy();
     }
      return redirect('view_product')->with('status','success');

    }

    public function admin_confirm(Request $req,$id,$proid,$user_id)
    {
        $returninsuer=10;
        # code...
        $adminuser=Session::get('user')['id'];
        $checkrent=Rented_item::where('id',$id)->first();
        $checkpro=Product::where('id',$proid)->first();
        $checkaccont=Mycccount::where('user_id',$user_id)->first();
        $checkinsuranc=Insurance::where('user_id',$user_id)->first();

        if( !$checkrent->status==0){


        if($checkinsuranc->amount>=$returninsuer){
        if($checkrent){
            $checkrent->admin_recieved='Received';
            $checkrent->status="completed";
            $checkrent->admin_id=$adminuser;
            $checkrent->update();
            if($checkrent){
                $checkpro->status=0;
                $checkpro->update();
                if($checkaccont){
                    $checkaccont->amount=$checkaccont->amount+$returninsuer;
                    $checkaccont->update();
                    if($checkaccont){
                        $checkinsuranc->amount=$checkinsuranc->amount-$returninsuer;
                        $checkinsuranc->update();
                        return redirect()->back()->with('status','Success');
                    }else{
                        return redirect()->back()->with('status','error');
                    }
                }

            }
        }
    }else{
        return redirect()->back()->with('status','error');
    }
}else{
    return redirect()->back()->with('status','naver do that, user has not returned it');
    }
    }

}
