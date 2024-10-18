<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function LatestNews(){
        return view('frontend.latest_news');
    }
    public function articals(){
        return view('frontend.articals');
    }
    public function expertReview(){
        return view('frontend.expert_review');
    }
    public function latestNewsDetail(){
        return view('frontend.latest_detail');
    }
}
