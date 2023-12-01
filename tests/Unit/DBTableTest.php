<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Movie;

class DBTableTest extends TestCase
{   
    /**
     * Test checks if table 'movies' in Database already exist and is not empty
     * If table 'movies' is empty or not exist - check migration and seeders files
     *
     * @return void
     */    
    public function testMovieListDBTableImplementation():void
    {
        $moviesCount = Movie::MoviesQB()->get()->count();

        $this->assertTrue( $moviesCount > 0 ) ;
    }
}
