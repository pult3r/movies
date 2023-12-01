@extends('layout')
@section('title', 'Home Page')
@section('content')
    <div class="container">
        <div class="row  justify-content-center align-items-center d-flex  h-100 mt-5">
            <div class="col-12 col-md-12">
                <h1 class="mb-2"><strong>{{ __('Welcome to Movie list system') }}</strong></h1>
                <p class="lead font-weight-bold  mb-5 pb-5 border-bottom border-grey">
                    {{ __('Here you can check your movie list') }}
                </p>
                <div class="row">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="h5 mb-4">
                            <a href="#" class="navi-button" targetFunction="RandomMovieList"
                                param="10">{{ __('Random movies') }}</a>
                        </h4>
                        <p>{{ __('Here you can get random 3 movies from list') }}</p>
                    </div>

                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="h5 mb-4">
                            <a href="#" class="navi-button"
                                targetFunction="WLetterMovieList">{{ __('\'W\' letter movies') }}</a>
                        </h4>
                        <p>{{ __('Movies starting with the letter \'W\' that have an even number of characters in the title') }}
                        </p>
                    </div>

                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="h5 mb-4">
                            <a href="#" class="navi-button"
                                targetFunction="LongerTitlesMovieList">{{ __('Longer titles movies') }}</a>
                        </h4>
                        <p>{{ __('Movies with titles with more than 1 word') }}</p>
                    </div>
                </div>
                <div class="row">

                    <h2 class="mb-2" id="movie-list-header"></h2>
                    <table class="table" id="movie-list">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{ __('Movie title') }}</th>
                            </tr>
                        </thead>
                        <tbody id="movie-list-body">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script src="{{ asset('page-js/common.js') }}"></script>
@endsection
