<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Type;
use App\Models\Service;
use App\Models\Blog;

class SitemapController extends Controller
{

public function index():Response{
    $services=Service::all();
    $types=Type::with("Service")->latest()->get();
    $blogs=Blog::all();

    return response()->view('sitemap',['types'=>$types,"services"=>$services,'blogs'=>$blogs])->header('Content-Type','text/xml');


}
}
