<?php

namespace Tests\Unit;

use Tests\TestCase;

class AdminTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {

        $response= $this->json ('post','/admin',['name'=> 'admin']);

        $response ->assertStatus(200)
            -> assertJson ([
                'created'=>true
            ]);
    }
}
