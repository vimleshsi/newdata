<?php
namespace App\Events;

use App\Events\TaskEvent;


use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;



class TaskEvent implements ShouldBroadcast
{
    use  SerializesModels;

    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function broadcastOn()
    {
        return new PrivateChannel('chat');
    }

    public function broadcastWith()
    {
       return [$this->message];
    }
}