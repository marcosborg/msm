<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\CommonInformation;
use App\Models\HeaderLink;
use App\Models\Link;
use App\Models\Menu;
use App\Models\Partner;
use App\Models\Slider;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {

        $menus = Menu::orderBy('position')->get();
        $sliders = Slider::all();
        $header_links = HeaderLink::all();
        $abouts = About::all();
        $links = Link::all();
        $partners = Partner::all();
        $common_information = CommonInformation::find(1);

        return view('website.index', compact([
            'menus',
            'sliders',
            'header_links',
            'abouts',
            'links',
            'partners',
            'common_information'
        ]));
    }
}
