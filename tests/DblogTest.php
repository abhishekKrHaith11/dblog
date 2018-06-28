<?php

namespace Tests;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Abhishekkrhaith11\Dblog\Dblog;

class DblogTest extends TestCase
{
    use RefreshDatabase;

    protected $dblog;

    public function setUp()
    {
        parent::setUp();

        $this->dblog = new Dblog;
    }

	/**
	* @test
	*/
    public function emergency_log_successful()
    {
        $this->assertTrue( $this->dblog->emergency( 'This is an emergency situation.' ) );
    }

    /**
	* @test
	*/
    public function alert_log_successful()
    {
        $this->assertTrue( $this->dblog->alert( 'This is an alert.' ) );
    }

    /**
	* @test
	*/
    public function critical_log_successful()
    {
        $this->assertTrue( $this->dblog->critical( 'This is a critical problem.' ) );
    }

	/**
	* @test
	*/
    public function error_log_successful()
    {
        $this->assertTrue( $this->dblog->error( 'This is an error.' ) );
    }

    /**
	* @test
	*/
    public function warning_log_successful()
    {
        $this->assertTrue( $this->dblog->warning( 'This is a warning.' ) );
    }

	/**
	* @test
	*/
    public function notice_log_successful()
    {
        $this->assertTrue( $this->dblog->notice( 'This is a notice.' ) );
    }

	/**
	* @test
	*/
    public function info_log_successful()
    {
        $this->assertTrue( $this->dblog->info( 'This is an info.' ) );
    }

	/**
    * @test
    */
    public function debug_log_successful()
    {
        $this->assertTrue( $this->dblog->debug( 'This is a debug.' ) );
    }

    /**
	* @test
	*/
    public function retrive_logs_with_type_successful()
    {
        $logs = $this->dblog->logs( 'info' );

        $this->assertInternalType( 'array', $logs );

        if ( ! empty( $logs ) ) {
            foreach ( $logs as $log ) {

                $this->assertArrayHasKey( 'type', $log );
                $this->assertArrayHasKey( 'message', $log );
                $this->assertArrayHasKey( 'created_at', $log );

            }
        }        

    }


}
