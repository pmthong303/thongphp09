<?php

namespace App\Http\Controllers;

use App\Category;
use App\Country;
use App\Genres;
use App\Movie;
use Illuminate\Http\Request;

class movieController extends Controller
{
    public function getMovie()
    {
        $categories = Category::all();
        $countries  = Country::all();
        $genres     = Genres::all();
        return view('admin.movie.create',compact('categories','countries','genres'));
    }
    public function postMovie(Request $request)
    {
        $movies = new Movie();
        $movies->name        = $request->name;
        $movies->genres_id   = $request->genres;
        $movies->category_id = $request->category;
        $movies->country_id  = $request->country;
        $movies->duration    = $request->duration;
        $movies->year        = $request->year;
        $movies->quality     = $request->quality;
        $movies->detail      = $request->detail;
        $fileName = $request->file('image')->getClientOriginalName();
        $request->file('image')->move("images/",$fileName);
        $movies->image       = $fileName;
        $movies->save();
        return redirect()->route('listMovie');
    }
    public function listMovie()
    {
        $movies = Movie::all();
        return view('admin.movie.list',compact('movies'));
    }
    public function editMovie($id)
    {
        $movies     = Movie::find($id);
        $categories = Category::all();
        $countries  = Country::all();
        $genres     = Genres::all();
        return view('admin.movie.edit',compact('movies','categories','countries','genres'));
    }
    public function updateMovie(Request $request)
    {
        $id = $request->id;
        $movies = Movie::find($id);
        $movies->name        = $request->name;
        $movies->genres_id   = $request->genres;
        $movies->category_id = $request->category;
        $movies->country_id  = $request->country;
        $movies->duration    = $request->duration;
        $movies->year        = $request->year;
        $movies->quality     = $request->quality;
        $movies->detail      = $request->detail;
        $fileName = $request->file('image')->getClientOriginalName();
        $request->file('image')->move("images/",$fileName);
        $movies->image       = $fileName;
        $movies->save();
        return redirect()->route('listMovie');
    }
    public function deleteMovie($id)
    {
        $movies = Movie::find($id);
        $movies->delete();
        return redirect()->route('listMovie');
    }
}
