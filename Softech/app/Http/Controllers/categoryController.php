<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function getCategory()
    {
        return view('admin.category.create');
    }
    public function postCategory(Request $request)
    {
        $categories = new Category();
        $categories->category = $request->category;
        $categories->save();
        return redirect()->route('listCategory');
    }
    public function listCategory()
    {
        $categories = Category::all();
        return view('admin.category.list', compact('categories'));
    }
    public function editCategory($id)
    {
        $categories = Category::find($id);
        return view('admin.category.edit',compact('categories'));
    }
    public function  updateCategory(Request $request)
    {
        $id = $request->id;
        $categories = Category::find($id);
        $categories->category = $request->category;
        $categories->save();
        return redirect()->route('listCategory');
    }
    public function deleteCategory($id)
    {
        $categories = Category::find($id);
        $categories->delete();
        return redirect()->route('listCategory');
    }
}
