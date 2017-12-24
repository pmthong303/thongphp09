<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class actorController extends Controller
{
    public function getActor()
    {
        return view('admin.actor.create');
    }
    public function postActor(Request $request)
    {
        $actors = new Actor();
        $actors->name = $request->actor;
        $actors->save();
        return redirect()->route('listActor');
    }
    public function listActor()
    {
        $actors = Actor::all();
        return view('admin.actor.list', compact('actors'));
    }
    public function editActor($id)
    {
        $actors = Actor::find($id);
        return view('admin.actor.edit',compact('actors'));
    }
    public function  updateActor(Request $request)
    {
        $id = $request->id;
        $actors = Actor::find($id);
        $actors->name = $request->actor;
        $actors->save();
        return redirect()->route('listActor');
    }
    public function deleteActor($id)
    {
        $actors = Actor::find($id);
        $actors->delete();
        return redirect()->route('listActor');
    }
}
