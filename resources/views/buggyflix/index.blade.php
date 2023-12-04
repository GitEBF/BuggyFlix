@extends("layouts.app")


@section("contenu")
<link rel="stylesheet" href="https://cdn.rawgit.com/kamranahmedse/jquery-toast-plugin/master/dist/jquery.toast.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.rawgit.com/kamranahmedse/jquery-toast-plugin/master/dist/jquery.toast.min.js"></script>
<!-- MAIN CONTAINER -->
<section class="main-container flex justify-center">
  @auth
    <div class="location" id="home">
      @role(1,2)
        <h1 id="home">Nouveau sur Buggyflix</h1> 
        <div class="box">
          @if (count($films))
            @foreach ($filmsbyDate->take(6) as $film)
              <a href="{{ route('buggyflix.show', [$film]) }}"><img src="{{ asset('img/films/' . $film->pochette)}}" alt="" title="{{$film->pochette}}" class="h-48 w-48 mx-auto"></a>
            @endforeach
          @else
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/t1.PNG?raw=true" alt=""></a>
          @endif
        </div>
      @endrole

      @role(1,3)
        <h1 id="home">Film pour enfant</h1> 
        <div class="box">
          @if (count($films))
            @foreach ($filmsPG->take(6) as $film)
              <a href="{{ route('buggyflix.show', [$film]) }}"><img src="{{ asset('img/films/' . $film->pochette)}}" alt="" title="{{$film->pochette}}" class="h-50 w-50 mx-auto"></a>
            @endforeach
          @else
            <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/t1.PNG?raw=true" alt=""></a>
          @endif
        </div>
      @endrole

      @role(1,2)
        <h1 id="myList">Action</h1>
        <div class="box">
          @foreach ($actionfilms->take(6) as $film)
            <a href="{{ route('buggyflix.show', [$film]) }}"><img src="{{ asset('img/films/' . $film->pochette)}}" alt="" title="{{$film->pochette}}" class="h-48 w-48 mx-auto"></a>
          @endforeach
        </div>

        <h1 id="myList">Horreur</h1>
        <div class="box">
          @foreach ($horrorfilms->take(6) as $film)
            <a href="{{ route('buggyflix.show', [$film]) }}"><img src="{{ asset('img/films/' . $film->pochette)}}" alt="" title="{{$film->pochette}}" class="h-48 w-48 mx-auto"></a>
          @endforeach
        </div>

        <h1 id="myList">Drame</h1>
        <div class="box">
          @foreach ($dramefilms->take(6) as $film)
            <a href="{{ route('buggyflix.show', [$film]) }}"><img src="{{ asset('img/films/' . $film->pochette)}}" alt="" title="{{$film->pochette}}" class="h-48 w-48 mx-auto"></a>
          @endforeach
        </div>
      @endrole
    </div>
  @endauth
  <!-- END OF MAIN CONTAINER -->
@endsection