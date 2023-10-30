@extends("layouts.app")

@section("contenu")
<section class="main-container">
    <div>
<h1>Page de {{$person->nom}}</h1>
@if (isset($person))
    <li>{{ $person->dateNaissance}} </li>
    <li>{{$person->lieuNaissance}} </li>
@else
    <p>Cette personne n'existe pas</p>
@endif
    </div>
</section>
@endsection