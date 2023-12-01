<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Testing\Fluent\AssertableJson;

class ApiMovieTest extends TestCase
{
    private const HTTP_STATUST_OK = 200;

    /*
     *@todo : move it to some config or env file
     */
    private const RANDOM_ORDER_LIMIT = 3;

    /**
     * Api 200 response and 3 random movies on list
     * List should contain 3 records
     * @return void
     */
    public function testApiRandomMovieList(): void
    {
        $JsonResponse = $this->get(route('MovieController.RandomMovieList'));
        $JsonResponse
            ->assertStatus(self::HTTP_STATUST_OK)
            ->assertJsonFragment(
                [
                    'success' => true,
                    'type' => 'success',
                ]
            );

        $moviDataCount = count(json_decode($JsonResponse->content())?->data);

        $this->assertTrue($moviDataCount === self::RANDOM_ORDER_LIMIT);
    }

    /**
     * Api 200 response and 'W' letter' movies on list 
     * List should not be empty
     * @return void
     */
    public function testApiWLetterMovieList(): void
    {
        $JsonResponse = $this->get(route('MovieController.RandomMovieList'));
        $JsonResponse
            ->assertStatus(self::HTTP_STATUST_OK)
            ->assertJsonFragment(
                [
                    'success' => true,
                    'type' => 'success',
                ]
            );

        $moviDataCount = count(json_decode($JsonResponse->content())?->data);

        $this->assertTrue($moviDataCount > 0);
    }


    /**
     * Api 200 response and Long title (min 2 words) movies on list 
     * List should not be empty
     * @return void
     */
    public function testLongerTitlesMovieListt(): void
    {
        $JsonResponse = $this->get(route('MovieController.LongerTitlesMovieList'));
        $JsonResponse
            ->assertStatus(self::HTTP_STATUST_OK)
            ->assertJsonFragment(
                [
                    'success' => true,
                    'type' => 'success',
                ]
            );

        $moviDataCount = count(json_decode($JsonResponse->content())?->data);

        $this->assertTrue($moviDataCount > 0);
    }
}
