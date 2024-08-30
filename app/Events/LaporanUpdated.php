<?php

namespace App\Events;
use App\Models\Laporan;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class LaporanUpdated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $laporans;
    /**
     * Create a new event instance.
     */
    public function __construct(Laporan $laporans)
    {
        $this->laporans = $laporans;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn()
    {
        return new Channel('laporan-updates');
       
    }

    public function broadcastWith()
    {
        return [
            'id' => $this->laporans->id,
            'status' => $this->laporans->status,
        ];
    }
}
