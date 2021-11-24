<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Room;
use Illuminate\Http\Request;

class PageController extends Controller
{
    

    public function welcome()
    {

        return view('pages.homepage');
    }



    public function show(Page $page, $slug = null) {
        $page = Page::where('slug', $slug)->whereNotNull('published_at')->firstOrFail();

        return view('pages.page')
            ->with('page', $page);
    }
    



    public function room_show(Page $page, $slug = null) {
        $page = Room::where('slug', $slug)->whereNotNull('published_at')->firstOrFail();

        return view('pages.room')
            ->with('page', $page);
    }
}
