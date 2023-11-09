@extends("layouts.app")

@section("contenu")
<section class="main-container">
    <div>
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
                        <h1>Film : {{$acteur->film->titre}}</h1>
                        <li>Role: {{$acteur->role}}</li>
                        <li>Nom du personnage : {{$acteur->nomPersonnage}}</li>
                    @endforeach
            @endif
            @foreach ($person->producteurs as $producteur)
                <h1>Film : {{$producteur->film->titre}}</h1>
                <li>Role: Producteur</li>
            @endforeach
            @foreach ($person->realisateurs as $realisateur)
                <h1>Film : {{$realisateur->film->titre}}</h1>
                <li>Role: Réalisateur</li>
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
  </style>

@endsection
