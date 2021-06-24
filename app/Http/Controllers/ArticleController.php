<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            "description" => "required"
        ]);

        DB::table("article")->insert([
            "title" => $request->title,
            "description" => $request->description
        ]);

        return redirect()->back();
    }

    public function edit($id)
    {
        $data = DB::table("article")->where("id",$id)->get();
        return view("edit",["data" => $data]);
    }

    public function update(Request $request)
    {
        $request->validate([
            "title" => "required",
            "description" => "required"
        ]);

        DB::table("article")->where("id",$request->id)->update([
            "title" => $request->title,
            "description" => $request->description
        ]);

        return redirect("/");
    }

    public function destroy($id)
    {
        DB::table("article")->where("id",$id)->delete();
        return redirect()->back();
    }
}
