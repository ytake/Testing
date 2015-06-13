<?php
namespace App;

use Illuminate\Broadcasting\BroadcastManager;

/**
 * Class Publisher
 * @package App
 */
class Publisher
{

    /** @var BroadcastManager   */
    protected $broadcast;

    /**
     * @param BroadcastManager $broadcast
     */
    public function __construct(BroadcastManager $broadcast)
    {
        $this->broadcast = $broadcast;
    }

    public function channel()
    {
        return config('channel');
    }

    public function broadcast()
    {
        $channel = $this->channel();
        // broadcast処理
    }
}
