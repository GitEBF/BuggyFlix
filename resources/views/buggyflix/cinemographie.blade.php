@extends("layouts.app")
<link rel="stylesheet" href="{{asset('css/pageInfoPerson.css')}}">
@section("contenu")
<section class="main-container">
    <div>
        <a class="top-right-link-2" href="{{ route('buggyflix.edit.person', [$person])}}"><i class="fa fa-wrench"></i></a>
        <form method="POST" action="{{route('persons.destroy', [$person->id]) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="top-right-link"><i class="fa fa-trash"></i></button>
        </form>
        
        <h1>Page de {{$person->nom}}</h1>
        @if (isset($person))
            <li>{{$person->dateNaissance}} </li>
            <li>{{$person->lieuNaissance}} </li>
            @if ($person->acteurs->count() > 0)
                    @foreach ($person->acteurs as $acteur)
                        <div class="rowRole">
                            <div class="infoRole">
                                <h1>Film : {{$acteur->film->titre}}</h1>
                                <li>Role: {{$acteur->role}}</li>
                                <li>Nom du personnage : {{$acteur->nomPersonnage}}</li>
                            </div>
                            <div class="supRole">
                            <form method="POST" action="{{route('acteurs.destroy', [$acteur->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="fa fa-trash"></i></button>
                            </form>
                            </div>
                        </div>  
                    @endforeach
            @endif
            @foreach ($person->producteurs as $producteur)
            <div class="rowRole">
                <div class="infoRole">
                    <h1>Film : {{$producteur->film->titre}}</h1>
                    <li>Role: Producteur</li>
                </div>
                <div class="supRole">
                    <form method="POST" action="{{route('producteurs.destroy', [$producteur->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit"><i class="fa fa-trash"></i></button>
                    </form>
                </div>
            </div>  
            @endforeach
            @foreach ($person->realisateurs as $realisateur)
            <div class="rowRole">
                <div class="infoRole">
                <h1>Film : {{$realisateur->film->titre}}</h1>
                <li>Role: Réalisateur</li>
                </div>
                <div class="supRole">
                    <form method="POST" action="{{route('realisateurs.destroy', [$realisateur->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit"><i class="fa fa-trash"></i></button>
                    </form>
                    </div>
                </div>
            @endforeach

        @else
            <p>Cette personne n'existe pas</p>
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
