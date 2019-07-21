<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.add-category');
    }

    public function saveCategoryInfo(Request $request)
    {
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();
        return redirect('category/add')->with('message', 'Category Saved Successfully');
    }

    public function manageCategoryInfo()
    {
        $categories = Category::all();
        return view('admin.category.manage-category', ['categories' => $categories]);
    }

    public function deleteCategoryInfo($id)
    {
        //return $id;
        $category = Category::find($id);
        $category->delete();
        return redirect('category/add')->with('message', 'Category Deleted Successfully');
    }

    public function publishCategoryInfo($id)
    {
        $category = Category::find($id);
        $category->publication_status = 0;
        $category->save();
        return redirect('category/manage');
    }

    public function UnPublishCategoryInfo($id)
    {
        $category = Category::find($id);
        $category->publication_status = 1;
        $category->save();
        return redirect('category/manage');
    }

    public function editCategoryInfo($id)
    {
        $category = Category::where('id', $id)->first();
        return view('admin.category.edit-Category', ['category' => $category]);
    }

    public function updateCategoryInfo(Request $request)
    {
        //return $request->id;
        $category = Category::find($request->id);
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();
        return redirect('category/manage');
    }
}
