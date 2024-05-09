<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Type;
class SitemapController extends Controller
{

public function index():Response{
    $types=Type::with("Service")->latest()->get();

    return response()->view('sitemap',['types'=>$types])->header('Content-Type','text/xml');


}
}
