<?php

namespace Abhishekkrhaith11\Dblog;

use Abhishekkrhaith11\Dblog\Models\Dblog;

class dblog
{

    public function emergency($message)
    {
    	return Dblog::create(['type' => 'emergency', 'message' => $message]);
    }


    public function alert($message)
    {
    	return Dblog::create(['type' => 'alert', 'message' => $message]);
    }


    public function critical($message)
    {
    	return Dblog::create(['type' => 'critical', 'message' => $message]);
    }


    public function error($message)
    {
    	return Dblog::create(['type' => 'error', 'message' => $message]);
    }


    public function warning($message)
    {
    	return Dblog::create(['type' => 'warning', 'message' => $message]);
    }


    public function notice($message)
    {
        return Dblog::create(['type' => 'notice', 'message' => $message]);
    }


    public function info($message)
    {
        return Dblog::create(['type' => 'info', 'message' => $message]);
    }


	public function debug($message)
    {
        return Dblog::create(['type' => 'debug', 'message' => $message]);
    }

}