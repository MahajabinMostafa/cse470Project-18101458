<?php

namespace Tests\Unit;


use Tests\TestCase;

class routeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get("http://localhost/MangaStore/MVC/Controller/");
            $response->assertStatus (404);

        $responses = $this->post("http://localhost/MangaStore/MVC/Controller/");
        $responses->assertStatus (404);
    }
}
