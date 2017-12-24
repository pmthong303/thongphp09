<?php

namespace App\Http\Controllers;

use App\Actor;
use App\Category;
use App\Comment;
use App\Country;
use App\Movie;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use function Sodium\compare;

class homeController extends Controller
{
    public function home()
    {
        $movies = Movie::all();
        $categories = Category::all();
        $countries  = Country::all();
        return view('page.home',compact('movies','categories','countries'));
    }
    public function detail($id)
    {
        $movie  = Movie::find($id);
        $categories = Category::all();
        $countries  = Country::all();
        return view('page.detail',compact('movie','categories','countries'));
    }
    public function getRegister()
    {
        return view('page.register');
    }
    public function postRegister(Request $request)
    {
        $users = new User();
        $users->name  = $request->name;
        $users->email = $request->email;
        $users->username = $request->username;
        $users->password = bcrypt($request->password);
        $users->role = 'member';
        Session::flash('message', 'Bạn đã đăng ký thành công');
        $users->save();
        return redirect()->route('home');
    }
    public function  getlogin()
    {
        $movies = Movie::all();
        $categories = Category::all();
        $countries  = Country::all();
        return view('page.loginPage',compact('movies','categories','countries'));
    }

    public function postlogin(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        if(Auth::attempt(['username'=>$username,'password'=>$password])){
            return redirect()->route('home');
        }else{
            return redirect()->route('loginPage');
        }
    }
    public function category($idCate)
    {
        $movies   = Movie::all()->where('category_id',$idCate);
        $categories = Category::all();
        $countries  = Country::all();
        return view('page.category',compact('movies','categories','countries'));
    }
    public function country($idCountry)
    {
        $movies   = Movie::all()->where('country_id',$idCountry);
        $categories = Category::all();
        $countries  = Country::all();
        return view('page.category',compact('movies','categories','countries'));
    }
    public function comment($id,Request $request)
    {
        $movie = Movie::find($id);
        $comments = new Comment();
        $comments->movie_id = $id;
        $comments->users_id = Auth::User()->id;
        $comments->content  = $request->txtComment;
        $comments->save();
        return redirect('home/detail/'.$movie->id);
    }
}
