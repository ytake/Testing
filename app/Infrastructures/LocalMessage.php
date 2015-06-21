<?php
namespace App\Infrastructures;

/**
 * Class LocalMessage
 * @package App\Infrastructures
 */
class LocalMessage implements Messageable
{

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return 'codeception';
    }

}
