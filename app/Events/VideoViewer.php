<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class VideoViewer
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $views;
    public function __construct($view)
    {
        $this->views=$view;
    }

    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
