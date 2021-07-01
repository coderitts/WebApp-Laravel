<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Article;

class DashboardController extends Controller
{

    public function __construct()
    {
        return $this->middleware(["auth"]);
    }

    public function index()
    {
        $data = Article::all();
        return view("dashboard.index",["index" => $data]);
    }
}
