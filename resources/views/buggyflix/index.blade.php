@extends("layouts.app")


@section("contenu")
<!-- MAIN CONTAINER -->
<section class="main-container">
  @auth
  @role(1,2)
  <div class="location" id="home"> <h1 id="home">Nouveau sur Buggyflix</h1> <div class="box">
    @if (count($films))
    @foreach ($filmsbyDate->take(6) as $film)
    <a href="{{ route('buggyflix.show', [$film]) }}"><img src="{{ asset('img/films/' . $film->pochette)}}" alt="" title="{{$film->pochette}}"></a>
    @endforeach

    @else
    <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/t1.PNG?raw=true" alt=""></a>
    @endif
    </div>
  </div>
  @endrole

  @role(1,3)
  <div class="location" id="home"> <h1 id="home">Film pour enfant</h1> <div class="box">
    @if (count($films))
    @foreach ($filmsPG->take(6) as $film)
    <a href="{{ route('buggyflix.show', [$film]) }}"><img src="{{ asset('img/films/' . $film->pochette)}}" alt="" title="{{$film->pochette}}"></a>
    @endforeach

    @else
    <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/t1.PNG?raw=true" alt=""></a>
    @endif
    </div>
  </div>
  @endrole


  @role(1,2)
  <h1 id="myList">Action</h1>
  <div class="box">
    @foreach ($actionfilms->take(6) as $film)
    <a href="{{ route('buggyflix.show', [$film]) }}"><img src="{{ asset('img/films/' . $film->pochette)}}" alt="" title="{{$film->pochette}}"></a>
    @endforeach
  </div>

  <h1 id="myList">Horreur</h1>
  <div class="box">
    @foreach ($horrorfilms->take(6) as $film)
    <a href="{{ route('buggyflix.show', [$film]) }}"><img src="{{ asset('img/films/' . $film->pochette)}}" alt="" title="{{$film->pochette}}"></a>
    @endforeach
  </div>


  <h1 id="myList">Drame</h1>
  <div class="box">
    @foreach ($dramefilms->take(6) as $film)
    <a href="{{ route('buggyflix.show', [$film]) }}"><img src="{{ asset('img/films/' . $film->pochette)}}" alt="" title="{{$film->pochette}}"></a>
    @endforeach
  </div>
  @endrole
  @else
  <div class="main-container location" id="home">
   <a class="location" href="{{ route('UsagersController.login')}}"><p>Veuillez vous connecter</p></a>
</div>
  @endauth
  <!-- END OF MAIN CONTAINER -->
  @endsection