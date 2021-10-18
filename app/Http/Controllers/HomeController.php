<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\ThemeBlock;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function welcome(Request $request)
    {
        $slider = [
            'title' => null,
            'componentName' => 'banners.slider-wrapper',
            'banners' => Banner::factory()->count(7)->image(1920, 450, true)->make()
        ];
        $theme_blocks = ThemeBlock::factory()->makeBlocks([
            'base_card', 
            'coupon_card',
            'discovery_card',
            'star_card',
            'djordje_card',
            'matt_tonks_card',
            'sanjay_sanjel_card',
        ]);
        return view('welcome', compact('slider', 'theme_blocks'));
    }
}
