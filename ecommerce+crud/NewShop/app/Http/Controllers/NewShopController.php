<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class NewShopController extends Controller
{
	public function userLogin(Request $request)
    {
        $user = User::where('email',$request->name)
            ->where('password',$request->password)->first();
        if ($user)
        return response()->json([
            'message'=>'message'
        ],200);
    }
    public function index()
    {
        $newProducts = Product::where('publication_status', 1)
            ->orderBy('id', 'DESC')
            ->take(8)
            ->get();
        //return $newProducts;
        return view('front-end.home.home', ['newProducts' => $newProducts]);
    }

    public function categoryProduct($id)
    {
        $categoryProducts = Product::where('category_id', $id)->where('publication_status', 1)->get();
        return view('front-end.category.category-content', ['categoryProducts' => $categoryProducts]);
    }

    public function brandProduct($id)
    {
        $brandProducts = Product::where('brand_id', $id)->where('publication_status', 1)->get();
        return view('front-end.brand.brand-content', ['brandProducts' => $brandProducts]);
    }

    public function productDetails($id)
    {
        $product = Product::find($id);
        return view('front-end.product.product-details',['product'=>$product]);
    }

    public function mailUs()
    {
        return view('front-end.mail.mail-us');
    }
}
