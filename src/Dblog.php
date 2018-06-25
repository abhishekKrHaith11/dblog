<?php

namespace Abhishekkrhaith11\Dblog;

use Abhishekkrhaith11\Dblog\Models\Dblog as MDblog;

class Dblog
{

    public function emergency($message)
    {
    	return MDblog::create(['type' => 'emergency', 'message' => $message]);
    }


    public function alert($message)
    {
    	return MDblog::create(['type' => 'alert', 'message' => $message]);
    }


    public function critical($message)
    {
    	return MDblog::create(['type' => 'critical', 'message' => $message]);
    }


    public function error($message)
    {
    	return MDblog::create(['type' => 'error', 'message' => $message]);
    }


    public function warning($message)
    {
    	return MDblog::create(['type' => 'warning', 'message' => $message]);
    }


    public function notice($message)
    {
        return MDblog::create(['type' => 'notice', 'message' => $message]);
    }


    public function info($message)
    {
        return MDblog::create(['type' => 'info', 'message' => $message]);
    }


	public function debug($message)
    {
        return MDblog::create(['type' => 'debug', 'message' => $message]);
    }

}