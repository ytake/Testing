<?php

class EntryDummyTest extends \TestCase
{
    use \Illuminate\Foundation\Testing\DatabaseMigrations;

    public function testDummy()
    {
        $this->runDatabaseMigrations();
        factory(\App\Entry::class, 5)->create();
        $this->assertEquals(5, \App\Entry::all()->count());
    }
}
