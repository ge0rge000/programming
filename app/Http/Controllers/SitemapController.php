<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Type;
use App\Models\Service;

class SitemapController extends Controller
{

public function index():Response{
    $services=Service::all();
    $types=Type::with("Service")->latest()->get();

    return response()->view('sitemap',['types'=>$types,"services"=>$services])->header('Content-Type','text/xml');


}
}
