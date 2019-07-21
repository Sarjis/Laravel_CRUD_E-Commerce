<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class ProductController extends Controller
{
    protected function allCategories()
    {
        $categories = Category::where('publication_status', 1)->get();
        return $categories;
    }

    protected function allBrands()
    {
        $brands = Brand::where('publication_status', 1)->get();
        return $brands;
    }

    function index()
    {
        return view('admin.product.add-product', ['categories' => $this->allCategories(), 'brands' => $this->allBrands()]);
    }

    function manageProduct()
    {
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->select('products.*', 'categories.category_name', 'brands.brand_name')
            ->get();
        return view('admin.product.manage-product', ['products' => $products]);
    }

    protected function imageUpload($request)
    {
        $product_image = $request->file('product_image');
        $product_extension = $product_image->getClientOriginalExtension();
        $product_name = $request->product_name . '.' . $product_extension;
        $directory = 'product_images/';
        $productUrl = $directory . $product_name;
        //$product_image->move($directory, $product_name);
        Image::make($product_image)->resize(150, 150)->save($productUrl);
        return $productUrl;
    }

    protected function storProduct($product, $request, $productUrl = null)
    {
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        if ($productUrl) {
            $product->product_image = $productUrl;
        }
        $product->publication_status = $request->publication_status;
        $product->save();
    }

    function saveProductInfo(Request $request)
    {
        $productUrl = $this->imageUpload($request);
        $product = new Product();
        $this->storProduct($product, $request, $productUrl);

        return redirect('product/manage');
    }

    function updateProductInfo(Request $request)
    {
        $product_image = $request->file('product_image');
        $product = Product::find($request->id);

        if ($product_image) {
            unlink($product->product_image);
            $productUrl = $this->imageUpload($request);
            $this->storProduct($product, $request, $productUrl);

        } else {
            $this->storProduct($product, $request);
        }

        return redirect('product/manage');
    }

    function publishProduct($id)
    {
        $product = Product::find($id);
        $product->publication_status = 0;
        $product->save();
        return redirect('/product/manage');
    }

    function unPublishProduct($id)
    {
        $product = Product::find($id);
        $product->publication_status = 1;
        $product->save();
        return redirect('/product/manage');
    }

    function detailsProduct($id)
    {
        $productById = Product::find($id)->first();
        return view('admin.product.product-detailsById', ['productById' => $productById]);
    }

    function editProduct($id)
    {
        $product = Product::find($id);
        return view('admin.product.edit-product', [
            'product' => $product,
            'categories' => $this->allCategories(),
            'brands' => $this->allBrands()]);
    }

}
