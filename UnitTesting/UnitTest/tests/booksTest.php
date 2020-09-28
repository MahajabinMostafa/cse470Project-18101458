<?php

namespace Tests\Unit;

use Tests\TestCase;

class booksTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testAbook()
    {

        //        $this->assertTrue(true);
        $response= $this->json ('post','/books',['name'=> 'MyHeroAcademiaVOL.2']);

        $response ->assertStatus(200)
            -> assertJson ([
                'created'=>true
            ]);

        $response1= $this->json ('post','/books',['name'=> 'Samurai Champloo VOL.1']);

        $response1 ->assertStatus(200)
            -> assertJson ([
                'created'=>true
            ]);

        $response2= $this->json ('post','/books',['name'=> 'Attack On Titan VOL.6']);

        $response2 ->assertStatus(200)
            -> assertJson ([
                'created'=>true
            ]);

        $response3= $this->json ('post','/books',['name'=> 'Kimetsu No Yaiba VOL.4']);

        $response3 ->assertStatus(200)
            -> assertJson ([
                'created'=>true
            ]);


    }
}
