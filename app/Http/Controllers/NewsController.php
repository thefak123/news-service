<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Http\Resources\RequestResource;
class NewsController extends Controller
{
    public function index(){
        $news = News::all();

        return new RequestResource(true, "List news", $news);
    }

    public function show($id){
        $news = News::find($id);

        return new RequestResource(true, "News by id", $news);
    }
}
