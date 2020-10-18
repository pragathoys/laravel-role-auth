<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
	$this->withoutExceptionHandling();
        $response = $this->get('/home');

	$response->dumpHeaders();
	$response->dump();
        $response->assertStatus(200);
    }

    /**
     * A basic test example to check if only admins can access the route /admin.
     *
     * @return void
     */
    public function adminBasicTest()
    {
        $response = $this->get('admin');

        $response->assertStatus(401);
    }

    /**
     * A basic test example to check if only moderators can access the route /moderate.
     *
     * @return void
     */
    public function moderatorBasicTest()
    {
        $response = $this->get('moderate');

        $response->assertStatus(401);
    }


}
