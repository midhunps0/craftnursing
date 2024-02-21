<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Ynotz\SmartPages\Http\Controllers\SmartController;

class PageController extends SmartController{
    public function home()
    {
        return $this->buildResponse('pages.home');
    }
    public function about()
    {
        return $this->buildResponse('pages.about');
    }
    public function courses()
    {
        return $this->buildResponse('pages.courses');
    }
    public function gallery()
    {
        return $this->buildResponse('pages.gallery');
    }
    public function contact()
    {
        return $this->buildResponse('pages.contact');
    }
    public function news()
    {
        return $this->buildResponse('pages.news');
    }
}
