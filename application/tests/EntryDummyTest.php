<?php

class EntryDummyTest extends \TestCase
{
    use \Illuminate\Foundation\Testing\DatabaseMigrations;

    public function testDummy()
    {
        $this->runDatabaseMigrations();
        $entry = factory('App\Entry', 5)->create();
    }
}