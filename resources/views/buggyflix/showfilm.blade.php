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
                <a class="uneInfo">{{$film->langue}} </a>
                <a class="uneInfo">{{$film->subtitle}} </a>
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
            <div class="groupePersons">
                <a class="uneInfo" > Acteur:
                    @foreach ($film->acteurs as $acteur)
                        <a href="{{ route('buggyflix.cinemographie', [$acteur->person->id]) }}" class="persons">~{{$acteur->person->nom}}</a>
                    @endforeach
                </a>
                <a class="uneInfo">Producteur:
                    @foreach ($film->producteurs as $producteur)
                        <a href="{{ route('buggyflix.cinemographie', [$producteur->person->id]) }}" class="persons">~{{$producteur->person->nom}}</a>
                    @endforeach
                </a>
                <a class="uneInfo">Réalisateur: 
                    @foreach ($film->realisateurs as $realisateur)
                        <a href="{{ route('buggyflix.cinemographie', [$realisateur->person->id]) }}" class="persons">~{{$realisateur->person->nom}}</a>
                    @endforeach
                </a>
            </div>
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