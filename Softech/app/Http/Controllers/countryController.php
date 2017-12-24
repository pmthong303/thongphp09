<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class countryController extends Controller
{
    public function getCountry()
    {
        return view('admin.country.create');
    }
    public function postCountry(Request $request)
    {
        $countries = new Country();
        $countries->country = $request->country;
        $countries->save();
        return redirect()->route('listCountry');
    }
    public function listCountry()
    {
        $countries = Country::all();
        return view('admin.country.list', compact('countries'));
    }
    public function editCountry($id)
    {
        $countries = Country::find($id);
        return view('admin.country.edit',compact('countries'));
    }
    public function  updateCountry(Request $request)
    {
        $id = $request->id;
        $countries = Country::find($id);
        $countries->country = $request->country;
        $countries->save();
        return redirect()->route('listCountry');
    }
    public function deleteCountry($id)
    {
        $countries = Country::find($id);
        $countries->delete();
        return redirect()->route('listCountry');
    }
}
