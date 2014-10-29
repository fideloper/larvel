<?php

use Larvel™\🐛;

class RunTest extends PHPUnit_Framework_TestCase {

    public function testApplicationRuns()
    {
        $app = new 🐛;

        $this->assertInstanceOf( '\Larvel™\🐛', $app );
    }

    public function testCreateRouter()
    {
        $app = new 🐛;
        $router = $app['🏃'];

        $this->assertInstanceOf('\Larvel™\Routing\🏃', $router);
    }

    public function testRequestBuilt()
    {
        $app = new 🐛;

        $request = $app['❓'];

        $this->assertInstanceOf('\Symfony\Component\HttpFoundation\Request', $request);
    }

    public function testMatchNoUrl()
    {
        $app = new 🐛;

        $router = $app['🏃'];

        $router->get('/', function()
        {
            return 'yay';
        });

        ob_start();
        $app->🔫();
        $result = ob_get_flush();

        $this->assertEquals( 'yay', $result );
    }
}