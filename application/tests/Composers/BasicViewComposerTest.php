<?php

use App\Composers\BasicViewComposer;

class BasicViewComposerTest extends \TestCase
{

    public function testCompose()
    {
        $factory = app('Illuminate\Contracts\View\Factory');
        $factory->addLocation(base_path('tests/resources/views'));
        $factory->composer('test', BasicViewComposer::class);
        $response = new \Illuminate\Http\Response($factory->make('test'));
        $this->assertArrayHasKey('variable', $response->original->getData());
    }
}
