<?php

namespace Abhishekkrhaith11\Dblog;

use Abhishekkrhaith11\Dblog\Models\Dblog as MDblog;

class Dblog
{

    public function emergency($message)
    {
    	return $this->logMessage('emergency', $message);
    }


    public function alert($message)
    {
        return $this->logMessage('alert', $message);
    }


    public function critical($message)
    {
        return $this->logMessage('critical', $message);
    }


    public function error($message)
    {
        return $this->logMessage('error', $message);
    }


    public function warning($message)
    {
        return $this->logMessage('warning', $message);
    }


    public function notice($message)
    {
        return $this->logMessage('notice', $message);
    }


    public function info($message)
    {
        return $this->logMessage('info', $message);
    }


	public function debug($message)
    {
        return $this->logMessage('debug', $message);
    }

    public function logs($type)
    {
        return MDblog::where('type', $type)->latest()->get( [ 'type', 'message', 'created_at' ] )->toArray();
    }

    protected function logMessage($type, $message)
    {
        $log = new MDblog;

        $log->type = $type;
        $log->message = $message;

        return $log->save();
    }

}