<?php

namespace Tests\Unit;

use Tests\TestCase;
use RefreshDatabase;

class genreInfoTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {


        $this->assertDatabaseHas('genre', [
            'genre_name'=>"Romance"

        ]);

        $this->assertDatabaseHas('genre', [
            'genre_name'=>"Sports"

        ]);


        $this->assertDatabaseHas('genre', [
            'genre_name'=>"Shounen"

        ]);

        $this->assertDatabaseHas('genre', [
            'genre_name'=>"Slice Of Life"

        ]);

        $this->assertDatabaseHas('genre', [
            'genre_name'=>"Horror"

        ]);


        $this->assertDatabaseHas('genre', [
            'genre_name'=>"Historical"

        ]);
    }
}
