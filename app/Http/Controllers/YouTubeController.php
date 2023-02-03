<?php

namespace App\Http\Controllers;

use App\Events\VideoViewer;
use App\Models\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class YouTubeController extends Controller
{
    public function getvideo()
    {
        $view=View::first();
       //class event
       event(new VideoViewer($view));

        return view('youtube')->with('views',$view);
    }
}
