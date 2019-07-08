<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Good;

class PagesController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function products($category){
        $products = Good::where('category',$category)->get();
        return view('products', ['products'=>$products,'page_title'=>$category]);
    }
    public function wishlist(){
        $products = Saved::where('category',$category)->get();
        return view('wishlist',['wishlist'=>$items,'page_title'=>'Wishlist']);
    }
    public function login(){
        return view('login');
    }
    public function signup(){
        return view('register');
    }
    public function bag(){
        if (session('shopping_bag')) {
            $bag_items=session('shopping_bag');
        } else {
            $bag_items=[];
        }
        return view('shopping_bag',['bag_items'=>$bag_items,'page_title'=>'Shopping bag']);
    }
    public function product($id){
        $item = Good::where('id',$id)->get();
        if (count($item)<1) {
            return redirect('/');
        }
        // return $item;
        return view('product',['item'=>$item[0],'page_title'=>$item[0]->item_name]);
    }
    public function search(){
        $term=request('item');

        $item = Good::where('item_name','like',"%$term%")
                      ->orWhere('brand','like',"%$term%")
                      ->orWhere('description','like',"%$term%")
                      ->orWhere('gender','like',"%$term%")->get();
        return view('search',['search_result'=>$item,'page_title'=>'Search for '.$term]);
    }

    public function add_to_bag(){
        // return session()->all();
        if (!session('shopping_bag')) {
            session()->put('shopping_bag', [request('id') => request()->all()]);
        }else{
            // session()->push('shopping_bag', request()->all());
            $bag=session('shopping_bag');
            if (empty($bag[request('id')])) {
                $bag += [request('id') => request()->all()];
            } else {
                $bag[request('id')]['quantity']=request('quantity');
            }



            // return $bag[request('id')];
            session()->put('shopping_bag',$bag);
        }




        // session()->push('shopping_bag', request()->all());
        // session()->flush();
        // return session('shopping_bag');
        return redirect('/product/'.request('id'));
    }
}
