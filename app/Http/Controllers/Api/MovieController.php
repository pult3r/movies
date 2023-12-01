<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

use App\Models\Movies;

use Exception;
use Validator;

class MovieController extends BaseController
{
    private const RANDOM_ORDER_LIMIT = 3;

    /**
     * Method return Json list of movies
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function RandomMovieList(): JsonResponse
    {
        try {
            $movieList = DB::table('movies')
                ->select('movies.title')
                ->distinct()
                ->inRandomOrder()
                ->orderby('title')
                ->limit(self::RANDOM_ORDER_LIMIT)
                ->get()
                ->toArray();

            if(!count($movieList)){
                return $this->sendResponse(
                    'error',
                    'No records'
                );
            }

            return $this->sendResponse(
                'success',
                'Random Movie List',
                $movieList
            );
        } catch (Exception $e) {
            return $this->sendError('Error.', [$e->getMessage()]);
        }
    }

    /**
     * Method return Json list of movies
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function WLetterMovieList(): JsonResponse
    {
        try {
            $movieList = DB::table('movies')
                ->select('movies.title')
                ->distinct()            
                ->where('title','like','W%')            
                ->whereRaw('MOD(LENGTH(title),2) = 0')
                ->orderby('title')
                ->get()
                ->toArray();

            if(!count($movieList)){
                return $this->sendResponse(
                    'error',
                    'No records'
                );
            }

            return $this->sendResponse(
                'success',
                'W Letter Movie List',
                $movieList
            );
        } catch (Exception $e) {
            return $this->sendError('Error.', [$e->getMessage()]);
        }
    }
    
    /**
     * Method return Json list of movies
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function LongerTitlesMovieList(): JsonResponse
    {
        try {
            $movieList = DB::table('movies')
                ->select('movies.title')
                ->distinct()
                ->whereRaw('LENGTH(title) != LENGTH(REPLACE(title, " ", ""))')
                ->orderby('title')
                ->get()
                ->toArray();

            if(!count($movieList)){
                return $this->sendResponse(
                    'error',
                    'No records'
                );
            }

            return $this->sendResponse(
                'success',
                'Longer titles movies',
                $movieList
            );
        } catch (Exception $e) {
            return $this->sendError('Error.', [$e->getMessage()]);
        }
    }
}
