@extends("layouts.app")

<link rel="stylesheet" href="{{asset('css/pageFilm.css')}}">
@section("contenu")
<section class="main-container" >
    <div >
@if (isset($film))
@role('1')
<a class="top-right-link-2" href="{{ route('buggyflix.edit.film', [$film])}}"><i class="fa fa-wrench"></i></a>
        <form method="POST" action="{{route('film.destroy', [$film->id]) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="top-right-link"><i class="fa fa-trash"></i></button>
        </form>
@endrole
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
                <div class="unRole">
                <a class="uneInfo" > Acteur:
                    @foreach ($film->acteurs as $acteur)
                        <a href="{{ route('buggyflix.cinemographie', [$acteur->person->id]) }}" class="persons">~{{$acteur->person->nom}}</a>
                    @endforeach
                    @role('1')
                    <a href="{{ route('buggyflix.create.acteur', [$film->id] )}}"class="ajoutRole">+ajouter acteur</a>
                    @endrole
                </a>
                </div>
                <div class="unRole">
                <a class="uneInfo">Producteur:
                    @foreach ($film->producteurs as $producteur)
                        <a href="{{ route('buggyflix.cinemographie', [$producteur->person->id]) }}" class="persons">~{{$producteur->person->nom}}</a>
                    @endforeach
                    @role('1')
                    <a href="{{ route('buggyflix.create.producteur', [$film->id] )}}"class="ajoutRole">+ajouter producteur</a>
                    @endrole
                </a>
                </div>
                <div class="unRole">
                <a class="uneInfo">Réalisateur: 
                    @foreach ($film->realisateurs as $realisateur)
                        <a href="{{ route('buggyflix.cinemographie', [$realisateur->person->id]) }}" class="persons">~{{$realisateur->person->nom}}</a>
                    @endforeach
                    @role('1')
                    <a href="{{ route('buggyflix.create.realisateur', [$film->id] )}}"class="ajoutRole">+ajouter realisateur</a>
                    @endrole
                </a>
                </div>
            </div>
        </div>
        <div class="imgFilm">
            <img src="{{ asset('img/films/' . $film->pochette)}}" alt="" title="{{$film->pochette}}">
        </div>
    </div>
@else
    <p>Le film n'existe pas</p>
@endif
    </div>
</section>


<style>
    .top-right-link {
      position: absolute;
      top: 80px;
      right: 10px; 
      background-color: #D81f26;
      color: #ffffff; 
      padding: 10px 15px;
      border-radius: 5px;
    }

    .top-right-link-2 {
      position: absolute;
      top: 80px;
      right: 60px; 
      background-color: #D81f26;
      color: #ffffff; 
      padding: 10px 15px;
      border-radius: 5px;
    }
  </style>

@endsection


