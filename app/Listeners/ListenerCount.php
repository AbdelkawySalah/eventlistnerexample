<?php

namespace App\Listeners;

use App\Events\VideoViewer;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ListenerCount
{

    public function __construct()
    {
    }

    //باخد اوبجكت من كلاس VideoViewer $event
    public function handle(VideoViewer $event)
    {
        //>>> $event->views refert to public $view in VideoViewerEvente this varabile contan data from construct  $this->$views=$view;;
      $this->updateviewer($event->views);

    }

    function updateviewer($view)
     {
        $view->views= $view->views+1;
        $view->save();
    }

}
