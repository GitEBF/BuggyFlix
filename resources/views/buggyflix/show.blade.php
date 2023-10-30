@extends("layouts.app")

<link rel="stylesheet" href="{{asset('css/pageFilm.css')}}">
@section("contenu")
<section class="main-container" >
    <div >
@if (isset($film))
    <div class="pageFilm">
        <div class="infoFilm">
            <h1 class="titreFilm">{{$film->titre}} </h1>
            <a>{{$film->cote}} </a>
            <a>{{$film->date}} </a>
            <a>{{$film->duree}} </a>
            </br>
            <a>{{$film->rating}} </a>
            <a>{{$film->type}} </a>
            <a>liste des genres</a>
            </br>
            <a>{{$film->resume}} </a>
            </br>
            <a>{{$film->langue}} </a>
            <a>{{$film->subtitle}} </a>
            </br>
            <a>{{$film->brand}} </a>
            </br>
            <a>Acteur: liste des acteurs</a>
            </br>
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