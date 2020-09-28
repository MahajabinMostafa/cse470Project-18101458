<?php

namespace Tests\Unit;

use Tests\TestCase;
use RefreshDatabase;

class booksInfoTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertDatabaseHas('admin', [
            'name'=>"admin"

        ]);
    }
}
