@extends("layouts.app")

@section("contenu")

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<section class="main-container">

  @auth
  @role(1)
  <div class="location" id="home"><h1>
    <a class="top-right-link-2" href="{{ route('buggyflix.create.film')}}"><i class="fa fa-wrench"></i>  Créer un film</a></h1>
  </div> 
  @endrole
  @role(1,2)
  <div class="location" id="home"> <h1 id="home">Films</h1> 
  <div class="box">
    @if (count($films))
    @foreach ($filmsbyDate as $film)
    <a href="{{ route('buggyflix.show', [$film]) }}"><img src="{{ asset('img/films/' . $film->pochette)}}" alt="" title="{{$film->pochette}}"></a>
    @endforeach
    @endif
    </div>
  </div>
  @endrole

  @role(3)
  <div class="location" id="home"> <h1 id="homePG">Films</h1> 
  <div class="box">
    @if (count($films))
    @foreach ($filmsPG as $film)
    <a href="{{ route('buggyflix.show', [$film]) }}"><img src="{{ asset('img/films/' . $film->pochette)}}" alt="" title="{{$film->pochette}}"></a>
    @endforeach
    @endif
    </div>
  </div>
  @endrole
  @endauth
</section>


@endsection

