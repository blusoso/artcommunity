<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Banner;
use App\NewsActivitys;
use App\CategoriesNewsActivitys;

class NewsController extends Controller
{
    public function index()
    {
        $banner = Banner::all()->where('page_id','3');
        $cateactivity = CategoriesNewsActivitys::latest()->get();
        $activity = NewsActivitys::latest()->get();
        return view('news.index')->withBanner($banner)->withNews($activity)->withCate($cateactivity);
    }
}
