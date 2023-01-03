<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\user;
use Illuminate\Support\Facades\Auth;
use Hash;

class BaseController extends Controller
{
    public function home(){
        $products = Product::get();
        $new_products = Product::limit(6)->latest()->get();
        return view('front.index',compact('products','new_products'));
    }

    public function specialoffer(){
        return view('front.specialoffer');
    }

    public function delivery(){
        return view('front.delivery');
    }

    public function contact(){
        return view('front.contact');
    }

    public function cart(){
        return view('front.cart');
    }

    public function productview(Request $request){
        $id= $request->id;
        $product = Product::with('Product_details')->first();
        return view('front.productview',compact('product'));
    }
    
    public function user_login(){
        return view('front.login');
    }

    public function loginCheck(Request $request){
        $data = array(
            'email' =>$request->email,
            'password' =>$request->password
        );
        if(Auth::attempt($data)){
            return redirect()->route('index');
        }else{
            back()->withErrors(['message'=>'invalide Email or Password']);

        }
    }
    Public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    // public function user_store( Request $request){
    //    $data = array(
    //        'name' => $request->first_name.' '.$request->last_name,
    //        'email' =>$request->email,
    //        'password' => Hash::make($request->password),
    //        'role' => 'user'
    //    );
    //    $user = user::create($data);
    //    return redirect()->route('user_login');
    // }

}
