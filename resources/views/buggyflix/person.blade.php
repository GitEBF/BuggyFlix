@extends("layouts.app")

@section("contenu")

<section class="main-container flex justify-center">

<div class="location" id="home">
      <h1 id="home">Les gens toutes biggie</h1>
      <div class="box">
      @if (count($persons))
        @foreach ($persons as $person)
          <a href="{{ route('buggyflix.cinemographie', [$person]) }}"><img src="{{$person->img}}" alt="" class="h-48 w-48 mx-auto"></a>
          @endforeach 
        @else
          <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/t1.PNG?raw=true" alt=""></a>
        @endif
      </div>
  </div>
</section>

@endsection

