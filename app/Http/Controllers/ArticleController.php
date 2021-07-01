<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Article;

class ArticleController extends Controller
{
    public function __construct()
    {
        return $this->middleware(["auth"]);
    }

    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            "description" => "required"
        ]);

        $data = new Article;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();

        return redirect()->back();
    }

    public function edit($id)
    {
        $data = DB::table("article")->where("id",$id)->get();
        return view("dashboard.edit",["data" => $data]);
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

        return redirect("/dashboard");
    }

    public function destroy($id)
    {
        $data = Article::find($id);
        $data->delete();
        
        return redirect()->back();
    }
}
