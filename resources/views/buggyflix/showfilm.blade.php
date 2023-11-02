@extends("layouts.app")

<link rel="stylesheet" href="{{asset('css/pageFilm.css')}}">
@section("contenu")
<section class="main-container" >
    <div >
@if (isset($film))
    <div class="pageFilm">
        <div class="infoFilm">
            <h1 class="titreFilm">{{$film->titre}} </h1>
            <div class="groupe">
                <a class="infoCote">{{$film->cote}} </a>
                <a class="uneInfo">{{$film->date}} </a>
                <a class="uneInfo">{{$film->duree}} </a>
            </div>
            <div class="groupe">
                <a class="uneInfo">{{$film->rating}} </a>
                <a class="uneInfo">{{$film->type}} </a>
                @foreach ($film->genres as $genre)
                    <a class="uneInfo"> {{$genre->genre->nom}} </a>
                @endforeach
            </div>
            <div class="resumeFilm">
                <a >{{$film->resume}} </a>
            </div>
            <div class="groupe">
                <a class="uneInfo">{{$film->langue}} </a>
                <a class="uneInfo">{{$film->subtitle}} </a>
            </div>
            <a class="uneInfo"> Acteur: 
            @foreach ($film->acteurs as $acteur)
                <a href="{{ route('buggyflix.cinemographie', [$acteur->person->id]) }}">~{{$acteur->person->nom}}~</a>
            @endforeach
             </a>
            <a>Réalisateur: liste des réalisateur</a>
            </br>
            <a>Producteur: liste des producteur</a>
        </div>
        <div class="imgFilm">
            <img class="pochetteFilm" src="{{$film->pochette}}">
        </div>
    </div>
@else
    <p>Le film n'existe pas</p>
@endif
    </div>
</section>
@endsection