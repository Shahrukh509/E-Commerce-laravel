<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
use DB;

class ProductController extends Controller
{
    public function index(){
    	$product = Product::all();

    	return view('product',['products' => $product]);
    }

    public function detail($id){

    	$detail = Product::find($id);
    	return view('detail',['product' =>  $detail]);

    }

    public function search(Request $request){

    	$data = Product::where('name','like','%'.$request->search.'%')->get();

    	return view('detail',['data'=> $data]);
    }

    public function addToCart(Request $request){

    	if($request->session()->has('user')){

    		$cart = new Cart();
    		$cart->user_id = $request->session()->get('user')['id'];
    		$cart->product_id = $request->product_id;
    		$cart->save();
    		if(!$cart == null){
            return redirect('/');
        }
        else{

        	return "<script>alert('something went wrong')</script>";
        }
    }
    else{

    	return redirect('/login');
    }

    }

    static function cartItem(){

    $userId= Session::get('user')['id'];
    return Cart::where('user_id',$userId)->count();

    }

    public function cartList(){
    	$userid = Session::get('user')['id'];

    $product = DB::table('cart')->join('products',
'cart.product_id','=','products.id')->where('cart.user_id',$userid)->select('products.*')->get();

    // print_r($data);exit;

    return view('cartlist',['item' => $product]);


    }

    public function removecart($id){
    	$cart = Cart::where('product_id',$id);
    	$cart->delete();
    	return redirect('cartList');


    }
}
