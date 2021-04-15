<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function index(){
        return view('Dashboard.index');

    }
    public function home(){

        return view('Dashboard.home');

    }
    public function welcome(Request $request1){
        //insert data
        Dashboard::create([
            'email' => $request1->email,
            'password' => $request1->password,
        ]);

//
//        //validate
//
//        $rules1=$this->getRoules();
//        $messages1=$this->getMessages();
//        $validator2 = Validator::make($request1->all(),$rules1,$messages1);
//        if($validator2 ->fails()){
//            return redirect()->back()->withErrors($validator2)->withInput($request1->all());
//        }
        return view('Dashboard.home');
    }
//    public function getRoules(){
//        return $rules1=[
//            'email'=>'required |unique:dashboards,email',
//            'password'=>'required',
//
//        ] ;
//    }
    public function getMessages(){
        return $messages=[
            'email.required'=>'الايميل مطلوب',
            'email.unique'=>'الايميل موجود من قبل من فضلك ادخل ايميل اخر',
            'password.required'=>'كلمه السر مطلوبه',

        ] ;
    }

    public function sidenav(){
        return view('Dashboard.layout-sidenav-light');
    }
    public function staticc(){
        return view('Dashboard.layout-static');

    }
    public function charts(){
        return view('Dashboard.charts');

    }
    public function pageOne(){
        return view('Dashboard.401');

    }
    public function pageTwo(){
        return view('Dashboard.404');

    }
    public function pageThree(){
        return view('Dashboard.500');

    }
    public function tables(){
        return view('Dashboard.tables');

    } public function login(){
        return view('Dashboard.login');

    }
//    public function welcome(Request $request1){
//        Dashboard::create([
//            'id'=>$request1->id,
//            'email'=>$request1->email,
//            'password'=>$request1->password,
//        ]);
//
//      return view('Dashboard.home');
//
//    }
    public function register(){
        return view('Dashboard.register');

    }public function forgetPassword(){
        return view('Dashboard.forget-password');

    }

}
