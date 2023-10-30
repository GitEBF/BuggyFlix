@extends("layouts.app")

@section("contenu")
<section class="main-container">
    <div>
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
            @else
                <p>Cette personne n'est pas un acteur.</p>
            @endif
        @else
            <p>Cette personne n'existe pas</p>
        @endif
    </div>
</section>
@endsection
