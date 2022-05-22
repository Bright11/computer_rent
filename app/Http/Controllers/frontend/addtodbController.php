<?php

namespace App\Http\Controllers\frontend;

use Carbon\Carbon;
use App\Models\Product;
use App\Models\Rented_item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Insurance;
use App\Models\Mycccount;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Input\Input;

class addtodbController extends Controller
{
    //
    public function rentnow(Request $req,$id)
    {
        $user=Session::get('user')['id'];
        $insuran=10;
        $onehour=Carbon::now()->addHour();
        $twohour=Carbon::now()->addHours(2);
        $threehour=Carbon::now()->addHours(3);
        if($user){
            $procheck=Product::where('id',$id)->first();

            $payinsuran=Insurance::where('user_id',$user)->first();

            $checkaccoun=Mycccount::where('user_id',$user)->first();
            $checkstudent=User::where('id',$user)->first();
            if($checkaccoun){
                if($checkaccoun->amount<$procheck->price*$req->hours_rented+$insuran){
                    return redirect('credit_account')->with('status','Top up');
                }else{

                    $rent=new Rented_item;
                    //returning_time
                    $rent->user_id=$user;
                    $rent->product_id=$id;
                    if($checkstudent->user_role==3){
                        $rent->price_paid=$procheck->price/10*$req->hours_rented;
                    }else{
                        $rent->price_paid=$procheck->price*$req->hours_rented;
                    }
                    $rent->hours_rented=$req->hours_rented;
                    if($req->hours_rented==1){
                        $rent->returning_time=$onehour;
                    }elseif($req->hours_rented==2){
                        $rent->returning_time=$twohour;
                    }elseif($req->hours_rented==3){
                        $rent->returning_time=$threehour;
                    }
                    $rent->time_rented=Carbon::now();
                    $rent->save();
                    if($rent){
                        $procheck->status='on lease';
                        $procheck->update();
                        if($procheck){
                            //payinsuran
                            if($checkstudent->user_role==3){
                                $total= $procheck->price/10*$req->hours_rented+$insuran;
                                $checkaccoun->amount=$checkaccoun->amount-$total;
                            }else{
                                $total= $procheck->price*$req->hours_rented+$insuran;
                                $checkaccoun->amount=$checkaccoun->amount-$total;
                            }
                            $checkaccoun->update();
                            if($checkaccoun){
                                $payinsuran->amount=$insuran;
                                $payinsuran->update();
                                return redirect('userprofil')->with('status','Success');
                            }

                        }
                    }

                    //the end of checking insuran
                }
            }
    }else{
        return redirect('/')->with('status','Login');
    }
    }

    public function topup(Request $req)
    {
        $req->validate([
            'topuo_amount'=>'integer|required'
        ]);
        # code...
        $user=Session::get('user')['id'];
        if($user){
            $checaccount=Mycccount::where('user_id',$user)->first();
            if($checaccount){
                $checaccount->amount=$req->topuo_amount+$checaccount->amount;
                $checaccount->update();
                return redirect('userprofil')->with('status','Account credited');
            }else{
                return redirect()->back()->with('status','Account not found!');
            }

        }else{
            return redirect('/')->with('status','login');
        }
       // return 'ok';
    }
    public function user_retureditem($id)
    {
        # code...
        $user=Session::get('user')['id'];
        $checkrent=Rented_item::where('id',$id)->where('user_id',$user)->first();
        $checkrent->status="waiting";
        $checkrent->update();
        return redirect()->back()->with('status','Success');
    }

}
