<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $slides= DB::table('slideshow')->orderBy('image_order', 'desc')->get();
        return view('pages.index', ['slides' => $slides, 'theme_nivo' => 'default'] );
    }

    public function terms() {
        return view('pages.terms-of-service');
    }

    public function privacy() {
        return view('pages.privacy');
    }
}
