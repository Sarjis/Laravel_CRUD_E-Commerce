<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return view('admin.brand.add-brand');
    }

    public function saveBrandInfo(Request $request)
    {
        $this->validate($request,[
            'brand_name'=>'required',
            'brand_description'=>'required',
            'publication_status'=>'required'
        ]);
        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->publication_status = $request->publication_status;
        $brand->save();
        return redirect('brand/add')->with('message', 'Brand Saved Successfully');
    }

    public function manageBrandInfo()
    {
        $brands = Brand::all();
        return view('admin.brand.manage-brand', ['brands' => $brands]);
    }

    public function deleteBrandInfo($id)
    {
        //return $id;
        $brand = Brand::find($id);
        $brand->delete();
        return redirect('brand/add')->with('message', 'Brand Deleted Successfully');
    }

    public function publishBrandInfo($id)
    {
        $brand = Brand::find($id);
        $brand->publication_status = 0;
        $brand->save();
        return redirect('brand/manage');
    }

    public function UnPublishBrandInfo($id)
    {
        $brand = Brand::find($id);
        $brand->publication_status = 1;
        $brand->save();
        return redirect('brand/manage');
    }

    public function editBrandInfo($id)
    {
        $brand = Brand::where('id', $id)->first();
        return view('admin.brand.edit-brand', ['brand' => $brand]);
    }

    public function updateBrandInfo(Request $request)
    {
        //return $request->id;
        $brand = Brand::find($request->id);
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->publication_status = $request->publication_status;
        $brand->save();
        return redirect('brand/manage');
    }
}
