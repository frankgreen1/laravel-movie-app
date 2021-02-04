@extends('layouts.main')

@section('content')
  <div class="container mx-auto px-4 pt-16">
      <div class="popular-movies">
          <h2 class="uppercase tracking-wider text-red-500 text-lg font-semibold">
              popular moives
          </h2>
          <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-8">
              @foreach ($popularMovies as $movie)
                   <x-movie-card :movie="$movie" :genres="$genres" />
              @endforeach



          </div>
      </div>  <!--popular movies ends here-->

      <div class="now-playing-movies py-24">
            <h2 class="uppercase tracking-wider text-red-500 text-lg font-semibold">
             Now playing
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($nowplayingMovies as $movie)
                <x-movie-card :movie="$movie" :genres="$genres" />
                @endforeach

            </div>
    </div> <!--end of now playing -->
  </div>



@endsection
