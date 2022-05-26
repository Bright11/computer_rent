<?php

namespace App\Http\Controllers\login;

use App\Models\User;
use App\Models\Mycccount;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Insurance;
use App\Models\Rented_item;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    //
    public function registration()
    {
        # code...
        $u=Session::get('user');
        if($u){
            return redirect()->back();
             }else{
                return view('frontend.registration');
             }

    }

    public function registernow(Request $req)
    {
        $validated = $req->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'phone_number' => 'required|unique:users',
            'password' => 'required|min:5',
            'confirm_p' => 'required|same:password|min:5'
        ]);
        # code...
        $register = new User;
        $register->name = $req->name;
        $register->email = $req->email;
        $register->phone_number = $req->phone_number;
        $register->password = Hash::make($req->password);
        $register->save();
        if ($register) {
            $login = User::where('email', $req->email)->first();
            $req->session()->put('user', $login);

            $accountr = User::where('email', $req->email)->first();
            $myaccount = new Mycccount;
            $myaccount->user_id = $accountr->id;
            $myaccount->amount = '0';
            $myaccount->save();
            if ($myaccount) {
                $insuranc = new Insurance;
                $insuranc->user_id = $accountr->id;
                $insuranc->amount = '0';
                $insuranc->save();
                return redirect('logout')->with('status', 'Success');
            }
        } else {
            return redirect()->back()->with('status', 'error');
        }
    }
    public function login(Request $req)
    {
        # code...
        $u=Session::get('user');
        if($u){

            return redirect('index');
        }else{
            return view('frontend.login');
        }

    }

    public function loginnow(Request $req)
    {
        $validated = $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        # code...
        $checktime = Carbon::now();

        $check = User::where('email', $req->email)->first();
        if ($check) {
            $checkbanduser = User::where('email', $req->email)->where('status', 'Band')->first();
            if (!$checkbanduser) {

                if (!$check || !Hash::check($req->password, $check->password)) {
                    return redirect()->back()->with('status', 'User name or password did not march');
                } else {

                    if ($check->user_role == 1) { //admin
                        $req->session()->put('user', $check);
                        return redirect('adminhome')->with('status', 'Login successfully');
                    } elseif ($check->user_role == 2) { //staff
                        $req->session()->put('user', $check);
                        return redirect('view_user')->with('status', 'Login successfully');
                    } elseif ($check->user_role == '3') { //student
                        $req->session()->put('user', $check);
                        return redirect('userprofil')->with('status', 'Login successfully');
                    } else {
                        $req->session()->put('user', $check);
                        return redirect('index')->with('status', 'Login successfully');
                    }
                }
                //
            } else {
                return redirect()->back()->with('status', 'Account suspended, contact adminstrator');
            }
        } else {
            return redirect()->back()->with('status', 'check your credicial');
        }
    }

    public function view_user()
    {
        # code...
        $u=Session::get('user')['id'];
        if($u){
            if (Session::get('user')->user_role == 1) {
        $alluser = User::all();
        return view('backend.view_user', ['alluser' => $alluser]);
    }else{
        return redirect()->back()->with('status', 'staff does not have the previlage to see users');
    }
    }else{
        return redirect('/');
    }
    }

    public function suspend_user($id)
    {
        $u=Session::get('user');
        if($u){
        # code...
        $u=Session::get('user')['id'];
        if (Session::get('user')->user_role == 1) {
        $userpending = User::where('id', $id)->first();
        $userpending->status = 'Band';
        $userpending->update();
        return redirect()->back()->with('status', 'User suspended');
    }else{
        return redirect()->back();
    }
    }else{
        return redirect('/');
    }
    }
    public function unband_user($id)
    {
        # code...
        $checku=Session::get('user');
        if($checku){
        if(Session::get('user')->user_role == 1){
            $checku=Session::get('user')['id'];
        $unband = User::where('id', $id)->first();
        $unband->status = 0;
        $unband->update();
        return redirect()->back()->with('status', 'User suspended');
    }else{
        return redirect()->back()->with('status','stop it or be suspended');
    }
}else{
    return redirect('/');
}
    }

    public function logout()
    {
        # code...
        Session::forget('user');
        return redirect('/')->with('status', 'logout');
    }


    public function promot_user($id)
    {
        # code...
        $checku=Session::get('user');
        if($checku){
        if(Session::get('user')->user_role == 1){

        $checuid = User::find($id);
        return view('backend.promot_user', ['checuid' => $checuid]);
    }else{
        return redirect()->back()->with('status','stop it or be suspended');
    }
}else{
    return redirect('/');
}
    }

    public function promotusertodb(Request $req, $id)
    {
        # code...
        $checku=Session::get('user');
        if($checku){
            $checku=Session::get('user')['id'];
        if(Session::get('user')->user_role == 1){
        $userrole = User::where('id', $id)->first();
        $userrole->user_role = $req->user_role;
        $userrole->update();
        return redirect('view_user')->with('status', 'Success');
    }else{
        return redirect()->back()->with('status','stop it or be suspended');
    }
}else{
    return redirect('/');
}
    }

    public function deleteuser($id)
    {
        # code...
        $checku=Session::get('user');
        if($checku){
            $checku=Session::get('user')['id'];
            if(Session::get('user')->user_role == 1){
                User::destroy($id);
                return redirect()->back()->with('status','deleted');
            }else{
                return redirect()->back()->with('status','stop it or be suspended');
            }
        }else{
            return redirect('/');
        }
    }
}
