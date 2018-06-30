<?php

namespace Tests;

use Abhishekkrhaith11\Dblog\Facades\Dblog;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DblogFacadeTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function emergency_log_successful()
    {
        $this->assertTrue(Dblog::emergency('This is an emergency situation.'));
    }

    /**
     * @test
     */
    public function alert_log_successful()
    {
        $this->assertTrue(Dblog::alert('This is an alert.'));
    }

    /**
     * @test
     */
    public function critical_log_successful()
    {
        $this->assertTrue(Dblog::critical('This is a critical problem.'));
    }

    /**
     * @test
     */
    public function error_log_successful()
    {
        $this->assertTrue(Dblog::error('This is an error.'));
    }

    /**
     * @test
     */
    public function warning_log_successful()
    {
        $this->assertTrue(Dblog::warning('This is a warning.'));
    }

    /**
     * @test
     */
    public function notice_log_successful()
    {
        $this->assertTrue(Dblog::notice('This is a notice.'));
    }

    /**
     * @test
     */
    public function info_log_successful()
    {
        $this->assertTrue(Dblog::info('This is an info.'));
    }

    /**
     * @test
     */
    public function debug_log_successful()
    {
        $this->assertTrue(Dblog::debug('This is a debug.'));
    }

    /**
     * @test
     */
    public function retrive_logs_with_type_successful()
    {
        $logs = Dblog::logs('error');

        $this->assertInternalType('array', $logs);

        if (! empty($logs)) {
            foreach ($logs as $log) {
                $this->assertArrayHasKey('type', $log);
                $this->assertArrayHasKey('message', $log);
                $this->assertArrayHasKey('created_at', $log);
            }
        }
    }
}
