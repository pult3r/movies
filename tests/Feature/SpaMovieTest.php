<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SpaMovieTest extends TestCase
{
    private const HTTP_STATUST_OK = 200;

    /**
     * Spa 200 response
     *
     * @return void
     */
    public function testSpaResponse():void
    {
        $response = $this->get('/');
        $response->assertStatus(self::HTTP_STATUST_OK);
    }
}
