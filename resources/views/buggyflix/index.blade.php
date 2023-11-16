@extends("layouts.app")


@section("contenu")
<!-- MAIN CONTAINER -->
<section class="main-container">
  @auth
  @role(2,1,3)
  <div class="location" id="home"> <h1 id="home">Popular on Netflix</h1> <div class="box">
    @if (count($films))
    @foreach ($filmsbyDate as $film)
    <a href="{{ route('buggyflix.show', [$film]) }}"><img src="{{ $film->pochette}}" alt=""></a>
    @endforeach

    @else
    <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/t1.PNG?raw=true" alt=""></a>
    @endif
    </div>
  </div>
  @endrole

  @role(1,3)
  <div class="location" id="home"> <h1 id="home">Popular on Netflix</h1> <div class="box">
    @if (count($films))
    @foreach ($filmsPG as $film)
    <a href="{{ route('buggyflix.show', [$film]) }}"><img src="{{ $film->pochette}}" alt=""></a>
    @endforeach

    @else
    <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/t1.PNG?raw=true" alt=""></a>
    @endif
    </div>
  </div>
  @endrole


  @role(1,2,3)
  <h1 id="myList">Action</h1>
  <div class="box">
    @foreach ($actionfilms as $film)
    <a href="{{ route('buggyflix.show', [$film]) }}"><img src="{{ $film->pochette}}" alt=""></a>
    @endforeach
  </div>
  @endrole

  @role(1,2)
  <h1 id="myList">Horreur</h1>
  <div class="box">
    @foreach ($horrorfilms as $film)
    <a href="{{ route('buggyflix.show', [$film]) }}"><img src="{{ $film->pochette}}" alt=""></a>
    @endforeach
  </div>


  <h1 id="myList">Drame</h1>
  <div class="box">
    @foreach ($dramefilms as $film)
    <a href="{{ route('buggyflix.show', [$film]) }}"><img src="{{ $film->pochette}}" alt=""></a>
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